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

class AreaUpdateCommand extends ContainerAwareCommand
{
    protected static $deepVerify = array(
        '1' => array('省', '市'),
    );

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

        foreach ($areas as $area) {
            if ($area['name'] == '浙江省') {
                $file = fopen('/Users/yearnwilling/Desktop/a.txt', 'rw+');
                fwrite($file, json_encode($area));
                fclose($file);
                $this->checkChangeArea($area, 1);
            }
        }


    }

    protected function checkChangeArea($areas, $deep)
    {
        if ($deep == 1) { //省,市
            $verifyedChinaAddress = array();
            $checkedName = $this->sub_str($areas['name'], 1);
            $selectedName = $areas['name'];
            if (in_array($checkedName['deepName'], self::$deepVerify['1'])) {
                $selectedName = $checkedName['checkName'];
            }
            $chinaAddress = $this->getChinaAddressService()->findChinaAddressLikeName($selectedName);
            if (count($chinaAddress) == 1) {
                $verifyedChinaAddress = $chinaAddress[0];
                $areas['name'] = '浙江省';
                if ($verifyedChinaAddress['region_type'] == $deep && $verifyedChinaAddress['region_name_cn'] != $areas['name']) {
                    //同级但是名字不同,更新成新的名字
                    $verifyedChinaAddress = $this->getChinaAddressService()->updateChinaAddressName($verifyedChinaAddress['region_id'], $areas['name']);
                }
            } else {
                foreach ($chinaAddress as $Address) {
                    if ($Address['region_name_cn'] == $areas['name']) {
                        $verifyedChinaAddress = $Address;
                    }
                }
            }

        }
    }

    protected function sub_str($string, $lastLength)
    {
        $name = ltrim($string);
        $checkName = mb_substr($name, 0, mb_strlen($name, 'utf-8') - $lastLength, 'utf-8');
        $deepName = mb_substr($name, mb_strlen($name, 'utf-8') - $lastLength, mb_strlen($name, 'utf-8'), 'utf-8');
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