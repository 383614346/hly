<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

load::sys_class('admin.class.php');
load::sys_class('nav.class.php');

class fenleilink extends admin {

	function __construct() {
		global $_M;
		parent::__construct();
	}
	
	/*
	 *表单控件
	 */
	function doindex() { //页面展示
		global $_M;
		
		echo 'sdfsdf';
		
		$query = "SELECT * FROM pol_fenleilink";
		$array = DB::get_all($query);
//		echo 'sdfsdf------';
//		dump($array);
		foreach($array as $key => $val){
			if($val['type'] == 1){
				$list = array();
				$list[] = $val['name'];
				$list[] = $val['url'];
			}else{
				continue;
			}
			$lists1[] = $list;
		}	
		$string1 = arrayto_string($lists1,$decollator1='->',$decollator2="\n");
		
		$lists1=null;
		foreach($array as $key => $val){
			if($val['type'] == 2){
				$list = array();
				$list[] = $val['name'];
				$list[] = $val['url'];
			}else{
				continue;
			}
			$lists1[] = $list;
		}	
		$string2 = arrayto_string($lists1,$decollator1='->',$decollator2="\n");
		
		$lists1=null;
		foreach($array as $key => $val){
			if($val['type'] == 3){
				$list = array();
				$list[] = $val['name'];
				$list[] = $val['url'];
			}else{
				continue;
			}
			$lists1[] = $list;
		}	
		$string3 = arrayto_string($lists1,$decollator1='->',$decollator2="\n");
		
		$lists1=null;
		foreach($array as $key => $val){
			if($val['type'] == 4){
				$list = array();
				$list[] = $val['name'];
				$list[] = $val['url'];
			}else{
				continue;
			}
			$lists1[] = $list;
		}	
		$string4 = arrayto_string($lists1,$decollator1='->',$decollator2="\n");

		
		require $this->template('own/index');
	}
	
	function doformeditor(){ //页面保存
		global $_M;
		
		$keyword_list = trim($_M['form']['link1']);
		$keyword_arr = explode("\r\n", $keyword_list);

		foreach($keyword_arr as $name_url){
			$links[] = explode('->',$name_url); 
		}
		$typeid = 1;
		$query="";
		if(is_number($typeid)){
			$query = "DELETE FROM pol_fenleilink WHERE type='{$typeid}' ";
		}
		dump($query);
		DB::query($query);
		echo '------------------------------';
		$query = "";
		foreach($links as $ns){
			$query = "INSERT INTO pol_fenleilink SET 
				type = '{$typeid}',
				name = '{$ns[0]}',
				url = '{$ns[1]}'; ";
			DB::query($query);
		}
		
		dump($query);

//
//		//--------------------------------------------------------
		$links = null;

		$keyword_list = trim($_M['form']['link2']);
		$keyword_arr = explode("\r\n", $keyword_list);

		foreach($keyword_arr as $name_url){
			$links[] = explode('->',$name_url); 
		}
		$typeid = 2;
		$query="";
		if(is_number($typeid)){
			$query = "DELETE FROM pol_fenleilink WHERE type='{$typeid}' ";
		}
		dump($query);
		DB::query($query);
		echo '------------------------------';
		$query = "";
		foreach($links as $ns){
			$query = "INSERT INTO pol_fenleilink SET 
				type = '{$typeid}',
				name = '{$ns[0]}',
				url = '{$ns[1]}'; ";
			DB::query($query);
		}
		
//		//--------------------------------------------------------
		$links = null;
		$keyword_list = trim($_M['form']['link3']);
		$keyword_arr = explode("\r\n", $keyword_list);

		foreach($keyword_arr as $name_url){
			$links[] = explode('->',$name_url); 
		}
		$typeid = 3;
		$query="";
		if(is_number($typeid)){
			$query = "DELETE FROM pol_fenleilink WHERE type='{$typeid}' ";
		}
		dump($query);
		DB::query($query);
		echo '------------------------------';
		$query = "";
		foreach($links as $ns){
			$query = "INSERT INTO pol_fenleilink SET 
				type = '{$typeid}',
				name = '{$ns[0]}',
				url = '{$ns[1]}'; ";
			DB::query($query);
		}
		
//		//--------------------------------------------------------
		$links = null;
		$keyword_list = trim($_M['form']['link4']);
		$keyword_arr = explode("\r\n", $keyword_list);

		foreach($keyword_arr as $name_url){
			$links[] = explode('->',$name_url); 
		}
		$typeid = 4;
		$query="";
		if(is_number($typeid)){
			$query = "DELETE FROM pol_fenleilink WHERE type='{$typeid}' ";
		}
		dump($query);
		DB::query($query);
		echo '------------------------------';
		$query = "";
		foreach($links as $ns){
			$query = "INSERT INTO pol_fenleilink SET 
				type = '{$typeid}',
				name = '{$ns[0]}',
				url = '{$ns[1]}'; ";
			DB::query($query);
		}
		
		turnover("{$_M[url][own_form]}a=doindex", '操作成功！');
	}
}

# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved.
?>