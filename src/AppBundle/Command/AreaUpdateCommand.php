<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 17/2/21
 * Time: 下午3:56
 */

namespace AppBundle\Command;

use AppBundle\Security\CurrentUser;
use AppBundle\Service\Common\ServiceKernel;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Validator\Constraints\Valid;

class AreaUpdateCommand extends ContainerAwareCommand
{
    protected static $deepVerify = array(
        '1' => array('省', '市', '自治区', '特别行政区'),
        '2' => array('区', '市'),
        '3' => array('市', '县', '区', '街道', '道', '镇', '乡'),
        '4' => array('街道', '道', '镇', '乡', '区')
    );

    protected $last_region_id;

    protected function configure()
    {
        $this
            ->setName('Area:update')
            ->setDescription('Update china address api table');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        ini_set('memory_limit', '-1');

        $this->initServiceKernel();
        $output->writeln("Update start.");
        $areas = $this->getAreaService()->getAll();
        $areas = $this->getAreaTree($areas);

        $this->last_region_id = $this->getChinaAddressService()->getLastRegionId();
        $number = 1;
        foreach ($areas as $area) {
//            if ($area['name'] == '广西壮族自治区') {
//                $file = fopen('/Users/yearnwilling/Desktop/a.txt', 'rw+');
//                fwrite($file, json_encode($area));
//                fclose($file);
                $this->checkChangeArea($area, 1);
                var_dump($number . ':' . $area['name']);
                $number += 1;
//            }
        }

    }

    protected function checkChangeArea($areas, $deep, $parent_area = array())
    {
        if ($deep == 1) { //省,市
            $this->findChinaAddressList($areas, $deep);
        } elseif (in_array($deep, array(2, 3, 4))) {
            foreach ($areas as $id => $area) { //市,区,
                $this->findChinaAddressList($area, $deep, $parent_area);
            }
        }
    }

    protected function findChinaAddressList($areas, $deep, $parent_area = array())
    {
        $resp = $this->verifyChinaAddress($areas, $deep, $parent_area, 1);

        if (empty($resp['verifyedChinaAddress']) && in_array($deep, array(3, 4)) && $resp['needSecond']) {
            $resp = $this->verifyChinaAddress($areas, $deep, $parent_area, 2);
        }
        if (empty($resp['verifyedChinaAddress']) && in_array($deep, array(1)) && $resp['needSecond']) {
            $resp = $this->verifyChinaAddress($areas, $deep, $parent_area, 3);
        }
        if (empty($resp['verifyedChinaAddress']) && in_array($deep, array(1)) && $resp['needSecond']) {
            $resp = $this->verifyChinaAddress($areas, $deep, $parent_area, 5);
        }

        //省的特殊情况处理
        if (empty($resp['verifyedChinaAddress']) && in_array($deep, array(1)) && $resp['needSecond']) {
            $resp = $this->verifyChinaAddress($areas, $deep, $parent_area, -2);
        }
        if (!empty($areas['children'])) {
            $this->checkChangeArea($areas['children'], $deep + 1, $resp['verifyedChinaAddress']);
        }
    }

    protected function verifyChinaAddress($areas, $deep, $parent_area = array(), $time)
    {
        $verifyedChinaAddress = array();
        $needSecond = false;
        $checkedName = $this->sub_str($areas['name'], $time);
        if ($time == -2) {
            $checkedName = $this->sub_str($areas['name'], $time);
        }
        $selectedName = $areas['name'];
        if (in_array($checkedName['deepName'], self::$deepVerify[(string)$deep])) {
            $selectedName = $checkedName['checkName'];
        }

        $chinaAddress = $this->getChinaAddressService()->findChinaAddressLikeName($selectedName, empty($parent_area)? '1': $parent_area['region_id']);
        if (count($chinaAddress) == 1) {
            $verifyedChinaAddress = $chinaAddress[0];
//            var_dump(111);
            if ($verifyedChinaAddress['region_type'] == $deep && $verifyedChinaAddress['region_name_cn'] != $areas['name']) {
                //同级但是名字不同,更新成新的名字
                var_dump($verifyedChinaAddress['region_name_cn'] . '->' . $areas['name']);
                $verifyedChinaAddress = $this->getChinaAddressService()->updateChinaAddressName($verifyedChinaAddress['region_id'], $areas['name']);
            } else {
                if (!$needSecond && $time == 1) {
                    $needSecond = true;
                }
            }
        } elseif (count($chinaAddress) > 1) {
//            var_dump(333);
            foreach ($chinaAddress as $Address) {
                if ($Address['region_name_cn'] == $areas['name']) {
//                    var_dump(444);
                    $verifyedChinaAddress = $Address;
                }
            }
            if (empty($verifyedChinaAddress)) {
                return;
            }

        } else {
            if (!mb_strrpos($areas['name'], '自治区') && !mb_strrpos($areas['name'], '特别行政区') ) {
                $newChinaAddress = array(
                    'region_id' => $this->last_region_id + 1,
                    'parent_id' => empty($parent_area) ? '1' : $parent_area['region_id'],
                    'region_name_py' => '',
                    'region_name_cn' => $areas['name'],
                    'region_type' => $deep,
                    'agency_id' => 0,
                    'weight' => 0,
                    'status' => 1,
                );
                $this->getChinaAddressService()->createChinaAddress($newChinaAddress);
                $verifyedChinaAddress = $this->getChinaAddressService()->getChinaAddressByRegionId($newChinaAddress['region_id']);
                $this->last_region_id += 1;
            } else {
                $needSecond = true;
            }
        }
        return array('verifyedChinaAddress' => $verifyedChinaAddress, 'needSecond' => $needSecond);
    }

    protected function calculateDiffer($name1, $name2)
    {
        $len1 = mb_strlen($name1, 'utf-8');
        $len2 = mb_strlen($name2, 'utf-8');

        if ($len1 > $len2) {
            return $len1-$len2;
        } else {
            return $len2-$len1;

        }
    }

    protected function sub_str($string, $lastLength)
    {
        $name = ltrim($string);
        $checkName = mb_substr($name, 0, mb_strlen($name, 'utf-8') - $lastLength, 'utf-8');
        $deepName = mb_substr($name, mb_strlen($name, 'utf-8') - $lastLength, mb_strlen($name, 'utf-8'), 'utf-8');
        if ($lastLength == -2) {
            $checkName = mb_substr($name, 0, 2, 'utf-8');
            $deepName = '自治区';
        }
        return array('checkName' => $checkName, 'deepName' => $deepName);
    }

    private function initServiceKernel()
    {
        $serviceKernel = ServiceKernel::create('dev', false);
        $serviceKernel->setParameterBag($this->getContainer()->getParameterBag());
        $serviceKernel->setConnection($this->getContainer()->get('database_connection'));
        $currentUser = new CurrentUser(array(
            'id' => 1,
            'nickname' => '游客',
            'currentIp' => '127.0.0.1',
            'roles' => array(),
        ));
        $serviceKernel->setCurrentUser($currentUser);

    }

    protected function getAreaService()
    {
        return ServiceKernel::instance()->createService('AppBundle:Area.AreaService');
    }

    protected function getChinaAddressService()
    {
        return ServiceKernel::instance()->createService('AppBundle:ChinaAddress.ChinaAddressService');
    }


    protected function getAreaTree($area)
    {
        $tree = array(); //格式化的树
        $tmpMap = array(); //临时扁平数据

        foreach ($area as $item) {
            $tmpMap[$item['id']] = $item;
        }

        foreach ($area as $item) {
            if (isset($tmpMap[$item['pid']])) {
                $tmpMap[$item['pid']]['children'][$item['id']] = &$tmpMap[$item['id']];
            } else {
                $tree[$item['id']] = &$tmpMap[$item['id']];
            }
        }
        unset($tmpMap);
        return $tree;
    }

}