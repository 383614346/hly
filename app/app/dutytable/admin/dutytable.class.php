<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

load::sys_class('admin.class.php');
load::sys_class('nav.class.php');

class dutytable extends admin {

	function __construct() {
		global $_M;
		parent::__construct();
	}
	
	/*
	 *表单控件
	 */
	function doindex() { //页面展示
		global $_M;
		//编辑文章
		$dutys = DB::get_one("SELECT * FROM pol_dutytable ORDER BY id DESC LIMIT 0,1");	
		require $this->template('own/index');
	}
	function doformeditor(){ //页面保存
		global $_M;
		$dbld = $_M[form][textdbld];//保存的类型
		$zzbld = $_M[form][textzzbld];
		$zbld = $_M[form][textzbld ];
		$date = new DateTime();
		$datetime = $date->format('Y-m-d H:i:s');
		$query = "INSERT INTO pol_dutytable SET 
							dbld = '{$dbld}',
							zzbld = '{$zzbld}',
							zbld = '{$zbld}',
							updatetime = '{$datetime}'
						";
		if(DB::query($query)){			
				turnover("{$_M[url][own_form]}a=doindex", '操作成功！');
		}else{
				turnover("{$_M[url][own_form]}a=doindex", '操作失败！');
		}
	}
	
	function dowindoweditor(){ //弹窗保存
		global $_M;
		turnover("{$_M[url][own_form]}a=doindex", '操作成功！');
	}
	function doctun(){ //栏目下拉菜单
		$formclass = load::own_class('admin/class/form.class.php','new');
		$formclass -> columnjson();//获取并输出JSON
	}
	
	/*
	 *表格控件——展示
	 */
//	function dotable_list(){
//		global $_M;
//		nav::select_nav(2);
//		require $this->template('own/table_list');
//	}
	function do_table_list_json(){ //表格数据获取
		$tableclass = load::own_class('admin/class/table.class.php','new');
		$tableclass -> table_list_json();//获取并输出JSON
	}
	function dolistsave(){ //页面保存
		global $_M;
		turnover("{$_M[url][own_form]}a=dotable_list", '操作成功！');
	}
	
	/*
	 *表格控件——编辑
	 */	
	function dotable_edit(){
		global $_M;
//		nav::select_nav(3);
		$array = column_sorting(1);
		foreach($array[2][class2] as $val){
			$column2[$val[bigclass]][] = $val;
		}
		foreach($array[2][class3] as $val){
			$column3[$val[bigclass]][] = $val;
		}
		$columnlist = '';
		foreach($array[2][class1] as $val){
			$disabled = count($column2[$val[id]])?'disabled':'';
			$columnlist.= "<option value=\"{$val[id]}\" {$disabled}>=={$val[name]}==</option>";
			foreach($column2[$val[id]] as $val2){
				$disabled = count($column3[$val2[id]])?'disabled':'';
				$columnlist.= "<option value=\"{$val2[id]}\" {$disabled}>{$val2[name]}</option>";
				foreach($column3[$val2[id]] as $val3){
					$columnlist.= "<option value=\"{$val3[id]}\">+{$val3[name]}</option>";
				}
			}
		}
		require $this->template('own/table_edit');
	}
	function do_table_edit_json(){ //表格数据获取
		$tableclass = load::own_class('admin/class/table.class.php','new');
		$tableclass -> table_edit_json();//获取并输出JSON
	}
	function do_table_editsave(){ //页面保存
		global $_M;
		$list = explode(",",$_M[form][allid]) ;//获取ID并转换为数组
		$type = $_M[form][submit_type];//保存的类型
		$com_ok = $_M[form][com_ok];
		$top_ok = $_M[form][top_ok ];
		$displaytype = $_M[form][displaytype];
		$query="";
		dump($_M['form']);
//		echo $type;
//		die();
		
		foreach($list as $id){
			if($id){
				if($type=='del'){//删除
					if(is_number($id)){
						$query = "DELETE FROM {$_M['table']['news']} WHERE id='{$id}' and lang='{$_M[lang]}' ";
					}
				}elseif($type==null){
					if(is_number($displaytype)){
						$query = "UPDATE {$_M['table']['news']} SET 
							displaytype = '{$displaytype}'
							WHERE id = '{$id}' and lang = '{$_M[lang]}'
						";
					}
					if(is_number($com_ok)){
						$query = "UPDATE {$_M['table']['news']} SET 
							com_ok = '{$com_ok}'
							WHERE id = '{$id}' and lang = '{$_M[lang]}'
						";
					}
					if(is_number($top_ok)){
						$query = "UPDATE {$_M['table']['news']} SET 
							top_ok = '{$top_ok}'
							WHERE id = '{$id}' and lang = '{$_M[lang]}'
						";
					}
				}
				DB::query($query);
			}
		}

		turnover("{$_M[url][own_form]}a=dotable_edit", '操作成功！');
	}
	
	/*文章保存*/
	function do_editor(){
		global $_M;
		$name = admin_information();
		$name = $name[admin_id];
		//编辑文章
		$news = DB::get_one("SELECT * FROM {$_M[table][news]} WHERE id = '{$_M[form][id]}'");
		$title = "编辑文章（{$news[title]}）";
		
		nav::select_nav(3,$title);
		$a_edit = "do_editor_save";
		require $this->template('own/edit');
	}
	
	function do_editor_save() {//文章保存代码
		global $_M;
		turnover("{$_M[url][own_form]}a=dotable_edit", '编辑成功！');
	}
	
	/*文章新增*/
	function do_add(){
		global $_M;
		$name = admin_information();
		$name = $name[admin_id];
		//添加文章，设置默认值
		$news['issue'] = $name;
		$news['hits'] = 100;
		$news['com_ok'] = 1;
		$news['addtime'] = date('Y-m-d H:i:s',time());
		$news['updatetime'] = date('Y-m-d H:i:s',time());
		$news['displaytype'] = 1;
		$title = "添加文章";
		$a_edit = "do_add_save";
		nav::select_nav(3,$title);
		require $this->template('own/edit');
	}
	
	function do_add_save() {//文章新增代码
		global $_M;
		turnover("{$_M[url][own_form]}a=dotable_edit", '编辑成功！');
	}
	
	/*文章新增*/
	function do_del() {//文章删除
		global $_M;
		$id = $_M[form][id];//保存的类型
		if(is_number($id)){
			$query = "DELETE FROM {$_M['table']['news']} WHERE id='{$id}' and lang='{$_M[lang]}' ";
		}
		DB::query($query);
		turnover("{$_M[url][own_form]}a=dotable_edit", '删除成功！');
	}
	
	/*
	 *表格控件——增加
	 */
	function dotable_in() { //页面展示
		global $_M;
		nav::select_nav(4);
		require $this->template('own/table_add');
	}
	function do_table_in(){ //页面保存
		global $_M;
		turnover("{$_M[url][own_form]}a=dotable_in", '操作成功！');
	}
	function do_table_in_json(){ //表格数据获取
		$tableclass = load::own_class('admin/class/table.class.php','new');
		$tableclass -> table_add_json();//获取并输出JSON
	}
	function do_table_add_list(){ //增加行
		$tableclass = load::own_class('admin/class/table.class.php','new');
		$tableclass -> table_add_list();//获取并输出JSON
	}
	
}

# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved.
?>