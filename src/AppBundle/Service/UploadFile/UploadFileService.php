<?php
namespace AppBundle\Service\UploadFile;
/**
 * Created by PhpStorm.
 * User: yearnwilling
 * Date: 16/12/11
 * Time: 下午2:26
 */
interface UploadFileService
{
    const GROUP_DEFAULT = 'default';

    const GROUP_USER = 'user';

    const GROUP_TMP = 'tmp';

    const SCOPE_PUBLIC = 'public';

    const SCOPE_PRIVATE = 'private';
}