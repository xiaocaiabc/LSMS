<?php

class IndexAction extends Action {

    Public function _initialize(){
        // 初始化的时候检查用户权限
        $this->checkLogin();
    }

    //检查用户是否登录
    public function  checkLogin(){
        if(!isset($_SESSION['u_id'])||$_SESSION['u_id']=''){
            $this->redirect('Log/index');
        }

    }

}