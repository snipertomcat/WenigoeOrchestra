<?php

namespace Stc\WenigoeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;


class User extends BaseUser
{
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

    public function loadUserData($id)
    {
        return array();
    }

    public function getUserObject()
    {
        return $this;
    }
}