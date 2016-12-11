<?php
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/11
 * Time: 下午2:27
 */

namespace AppBundle\Service\UploadFile\Impl;


use AppBundle\Service\Common\BaseService;
use AppBundle\Service\Common\FileToolkit;
use AppBundle\Service\UploadFile\UploadFileService;
use Symfony\Component\HttpFoundation\File\File;

class UploadFileServiceImpl extends BaseService implements UploadFileService
{
    public function uploadFile(File $uploadFile, $group = self::GROUP_DEFAULT, $scope = self::SCOPE_PUBLIC)
    {
        //校验文件
        $errors = FileToolkit::validateFileExtension($uploadFile);

        if ($errors) {
            @unlink($uploadFile->getRealPath());
            throw new \Exception('该文件格式，不允许上传。');
        }
        //保存数据控(暂时不保存)
        //保存文件
        $extension = FileToolkit::getFileExtension($uploadFile);
        $filename = FileToolkit::generateFilename($extension);
        $relativeDir = $this->generateRelativeSaveDir($group);

        //生成文件路径
        $fileDirectory = $this->getUploadDir($scope) . '/' . $relativeDir;
        if (!is_dir($fileDirectory)) {
            if (true !== @mkdir($fileDirectory, 0777, true)) {
                throw new \RuntimeException("根目录{$fileDirectory}创建失败，请检查目录权限", 110);
            }
        }

        if (!is_writable($fileDirectory)) {
            throw new \Exception("文件上传路径{$fileDirectory}不可写，文件上传失败。");
        }
        //保存文件
        $uploadFile->move($fileDirectory, $filename);

        return $this->generateFileUri($scope, $relativeDir . '/' . $filename);
    }

    public function parseFileUri($fileUri)
    {
        $parsed = array();
        $parts = explode('://', $fileUri);
        if (empty($parts) || count($parts) != 2) {
            throw new \RuntimeException("解析文件URI({$fileUri})失败！");
        }

        $parsed['scope'] = $parts[0];
        $parsed['path'] = $parts[1];
        $parsed['filename'] = basename($parsed['path']);
        $parsed['ext'] = substr(strrchr($parsed['path'], '.'), 1);

        $parsed['fullpath'] = realpath($this->getUploadDir($parsed['scope']) . '/' . $parsed['path']);

        return $parsed;
    }

    protected function generateFileUri($scope, $relativeFilename)
    {
        return $scope . '://' . $relativeFilename;
    }

    protected function generateRelativeSaveDir($group)
    {
        return trim($group, '/') . '/' . date('Y') . '/' . date('m-d');
    }

    protected function getUploadDir($scope)
    {
        if ($scope == self::SCOPE_PRIVATE) {
            return $this->getKernel()->getParameter('upload.private_directory');
        } else {
            return $this->getKernel()->getParameter('upload.public_directory');
        }
    }
}