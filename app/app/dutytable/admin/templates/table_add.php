<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');
echo <<<EOT
-->
<form method="POST" name="myform" class="ui-from" action="{$_M[url][own_form]}a=do_table_in" target="_self">
	<div class="v52fmbx">
	<div class="v52fmbx-table-top">
		<div class="ui-float-right">
			<div class="ui-table-search">
				<i class="fa fa-search"></i>
				<input name="search_title" data-table-search="1" type="text" value="" class="ui-input" placeholder="请输入栏目名称" style="width:120px;" />
			</div>
		</div>
		<div class="ui-float-left">
			<a href="javascript:;" class="ui-addlist" data-table-addlist="{$_M[url][own_form]}a=do_table_add_list"><i class="fa fa-plus-circle"></i>添加一级栏目</a>
		</div>
	</div>
<table class="display dataTable ui-table new_effects" data-table-ajaxurl="{$_M[url][own_form]}a=do_table_in_json">
    <thead>
        <tr>
            <th width="20" data-table-columnclass="met-center"><i class="fa fa-caret-right"></i></th>
            <th width="20" data-table-columnclass="met-center"><input name="id" data-table-chckall="id" type="checkbox" value="" /></th>
            <th width="20" data-table-columnclass="met-center">排序</th>
            <th>栏目名称</th>
            <th width="100" data-table-columnclass="met-center">
				<select name="search_fod" data-table-search="1">
					<option value="">导航栏显示</option>
					<option value="0">不显示</option>
					<option value="1">头部主导航条</option>
					<option value="2">尾部导航条</option>
					<option value="3">都显示</option>
				</select>
			</th>
            <th width="50" data-table-columnclass="met-center met-gray">
				<select name="search_mod" data-table-search="1">
					<option value="">所属模块</option>
					<option value="1">简介模块</option>
					<option value="2">文章模块</option>
					<option value="3">产品模块</option>
					<option value="4">下载模块</option>
					<option value="5">图片模块</option>
					<option value="8">反馈系统</option>
					<option value="100">产品列表</option>
					<option value="101">图片列表</option>
					<option value="999">外部模块</option>
				</select>
			</th>
            <th width="50" data-table-columnclass="met-gray">目录名称</th>
            <th>操作</th>
        </tr>
    </thead>
	<tbody>
	</tbody>
    <tfoot>
        <tr>
			<th><i class="fa fa-caret-right"></i></th>
            <th><input name="id" type="checkbox" data-table-chckall="id" value=""></th>
			<th colspan="6" class="formsubmit">
				<input type="submit" name="save" value="保存" class="submit" />
				<input type="submit" name="delete" value="删除" class="submit" />
			</th>
        </tr>
    </tfoot>
    <tfoot>
        <tr>
			<th></th>
			<th></th>
			<th colspan="6" class="formsubmit">
				<a href="javascript:;" class="ui-addlist" data-table-addlist="{$_M[url][own_form]}a=do_table_add_list"><i class="fa fa-plus-circle"></i>添加一级栏目</a>
			</th>
        </tr>
    </tfoot>
</table>
	</div>
</form>
<!--
EOT;
require $this->template('ui/foot');
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved..
?>