<?php
namespace User\Controller;
use Think\Controller;

/**
 * @author Zhou Yuyang <1009465756@qq.com> 2015-07-27
 * @copyright ©2105-2018 SRCMS
 * @homepage http://www.src.pw
 * @version 1.0
 */

class GiftController extends BaseController{

    public function index(){
        $gift = M('links')->select();
        $this->assign('gift',$gift);
        $this->display();
    }
}
