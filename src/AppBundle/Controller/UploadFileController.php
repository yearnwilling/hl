<?php

namespace AppBundle\Controller;

use AppBundle\Controller\BaseController;
use AppBundle\Service\Common\FileToolkit;
use AppBundle\Service\Common\StringToolkit;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;

class UploadFileController extends BaseController
{
    public function publicImageDisplayAction(Request $request, $fileHash )
    {
        $parsed = $this->getUploadFileService()->parseFileUri(StringToolkit::base64Decryption($fileHash));

        return $this->forward('AppBundle:UploadFile:downloadLocalFile', [
            'filepath' => $parsed['fullpath']
        ]);
    }

    public function downloadLocalFileAction($filepath, $downloadName = null)
    {
        $response = BinaryFileResponse::create($filepath, 200, [], false);
        $response->trustXSendfileTypeHeader();

        if ($downloadName) {
            $downloadName = urlencode($downloadName);
            $response->headers->set('Content-Disposition', "attachment; filename={$downloadName}; filename*=UTF-8 {$downloadName}");
        }

        $mimeType = FileToolkit::getMimeTypeByExtension(substr(strrchr($filepath, '.'), 1));

        if ($mimeType) {
            $response->headers->set('Content-Type', $mimeType);
        }

        return $response;
    }

    protected function getUploadFileService()
    {
        return $this->getServiceKernel()->createService('AppBundle:UploadFile.UploadFileService');
    }


}