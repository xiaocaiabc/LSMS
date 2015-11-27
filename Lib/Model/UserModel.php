<?php

class userModel extends Model{
	function  doLogin($u_name,$u_pwd){
	
		$u_pwd=md5($u_pwd);
		return $this->select('select count(*) from user where u_name='.$u_name.' and u_pwd ='.$u_pwd);
	
	}
	
}
	