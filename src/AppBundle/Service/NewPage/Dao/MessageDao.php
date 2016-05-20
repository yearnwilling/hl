<?php

namespace AppBundle\Service\NewPage\Dao;

interface MessageDao
{
    public function getMessage();

    public function addMessage($message);

    public function deleteMessage($id);
}
