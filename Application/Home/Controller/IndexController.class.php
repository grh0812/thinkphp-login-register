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
        // 获取当前账户的登录信息
        $info = M('users')->field('loginnum')->where(array('id' => parent::$userid))->find();

        $this->assign('info', $info);
        $this->assign('SERVER_SOFTWARE', $_SERVER['SERVER_SOFTWARE']);
        $this->display();
    }
}