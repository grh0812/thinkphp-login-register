<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 首页控制器
 * @package Home\Controller
 */
class IndexController extends CommonController {
    /**
     * 系统首页
     */
    public function index(){
        $this->display();
    }
}