<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return 123;
    }

    public function hello()
    {
      return 456;
    }

    public function test()
    {
        echo "分支";
    }
}
