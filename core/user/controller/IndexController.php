<?php

namespace core\user\controller;
use core\admin\model\Model;
use core\base\controller\BaseController;

class IndexController extends BaseUser {
    protected $name;

    //система множественного наследования
    protected function inputData(){

        parent::inputData();

        $res = $this->img();

        $a = 1;
    }

}