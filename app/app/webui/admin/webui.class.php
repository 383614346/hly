<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

load::sys_class('admin.class.php');
load::sys_class('nav.class.php');

class webui extends admin {

	function __construct() {
		global $_M;
		parent::__construct();
		nav::set_nav(1,'表单控件',$_M[url][own_form].'a=doindex');
		nav::set_nav(2,'表格控件—展示',$_M[url][own_form].'a=dotable_list');
		nav::set_nav(3,'表格控件—编辑',$_M[url][own_form].'a=dotable_edit');
		nav::set_nav(4,'表格控件—增加',$_M[url][own_form].'a=dotable_in');
	}
	
	/*
	 *表单控件
	 */
	function doindex() { //页面展示
		global $_M;
		nav::select_nav(1);
		require $this->template('own/index');
	}
	function doformeditor(){ //页面保存
		global $_M;
		turnover("{$_M[url][own_form]}a=doindex", '操作成功！');
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
	function dotable_list(){
		global $_M;
		nav::select_nav(2);
		require $this->template('own/table_list');
	}
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
		nav::select_nav(3);
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
		//dump($_M['form']);
		//die();
		/*注释部分是示例代码
		$list = explode(",",$_M[form][allid]) ;//获取ID并转换为数组
		$type = $_M[form][submit_type];//保存的类型
		foreach($list as $id){
			if($id){
				if($type=='save'){//如果是保存
					$oldwords = $_M['form']['oldwords-'.$id];
					$newwords = $_M['form']['newwords-'.$id];
					$newtitle = $_M['form']['newtitle-'.$id];
					$url 	  = $_M['form']['url-'.$id];
					$num 	  = $_M['form']['num-'.$id];
					if(is_number($id)){//修改
						$query = "UPDATE {$_M['table']['label']} SET 
							oldwords = '{$oldwords}',
							newwords = '{$newwords}',
							newtitle = '{$newtitle}',
							url	     = '{$url}',
							num	     = '{$num}'
							WHERE id = '{$id}' and lang = '{$_M[lang]}'
						";
					}else{//新增
						$query = "INSERT INTO {$_M['table']['label']} SET 
							oldwords = '{$oldwords}',
							newwords = '{$newwords}',
							newtitle = '{$newtitle}',
							url	     = '{$url}',
							num	     = '{$num}',
							lang	 = '{$_M[lang]}'
						";
					}
				}elseif($type=='del'){//删除
					if(is_number($id)){
						$query = "DELETE FROM {$_M['table']['label']} WHERE id='{$id}' and lang='{$_M[lang]}' ";
					}
				}
				DB::query($query);
			}
		}
		*/
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
		turnover("{$_M[url][own_form]}a=dotable_edit", '编辑成功！');
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