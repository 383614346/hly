<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');
echo <<<EOT
-->
<form method="POST" name="myform" class="ui-from" action="{$_M[url][own_form]}a=do_table_editsave" target="_self">
	<div class="v52fmbx">
	<div class="v52fmbx-table-top">
		<div class="ui-float-left">
			<div class="ui-table-search">
				<i class="fa fa-search"></i>
				<input name="search_title" data-table-search="1" type="text" value="" class="ui-input" placeholder="请输入文章标题" style="width:320px;" />
			</div>
		</div>
		<!--<div class="ui-float-left">
			<a href="{$_M[url][own_form]}a=do_add" class="ui-addlist"><i class="fa fa-plus-circle"></i>添加文章</a>
		</div>-->
	</div>
	<table class="display dataTable ui-table" data-table-ajaxurl="{$_M[url][own_form]}a=do_table_edit_json" data-table-pageLength="10">
	    <thead>
	        <tr>
	            <th width="25" data-table-columnclass="met-center"><input name="id" data-table-chckall="id" type="checkbox" value="" /></th>
	            <th width="25" data-table-columnclass="met-center">#</th>
	            <th>标题</th>
	            <th width="50" data-table-columnclass="met-center met-gray">
					<select name="search_displaytype" data-table-search="1">
						<option value="">筛选审核</option>
						<option value="1">审核</option>
						<option value="0">未审核</option>
					</select>
				</th>
	            <th width="50" data-table-columnclass="met-center met-gray">
					<select name="search_com_ok" data-table-search="1">
						<option value="">采用</option>
						<option value="1">是</option>
						<option value="0">否</option>
					</select>
				</th>
	            <th width="30" data-table-columnclass="met-center met-gray">置顶</th>
	            <th width="90" data-table-columnclass="met-center met-gray">更新时间</th>
	            <th>操作</th>
	        </tr>
	    </thead>
		<tbody>
		</tbody>
	    <tfoot>
	        <tr>
	            <th><input name="id" type="checkbox" data-table-chckall="id" value=""></th>
				<th colspan="7" class="formsubmit">
					<!--<input type="submit" name="save" value="保存排序" class="submit" />-->
					<input type="submit" name="del" value="删除" class="submit" data-confirm="确定要删除选中的信息吗？一旦删除将不能恢复！"/>
					<select name="displaytype" data-isubmit="1">
						<option value="">审核设置</option>
						<option value="1">审核</option>
						<option value="0">未审核</option>
					</select>
					<select name="com_ok" data-isubmit="1">
						<option value="">采用设置</option>
						<option value="1">是</option>
						<option value="0">否</option>
					</select>
					<select name="top_ok" data-isubmit="1">
						<option value="">置顶</option>
						<option value="1">是</option>
						<option value="0">否</option>
					</select>
					<!--<select name="copyto" data-isubmit="1">
						<option value="">复制到</option>
						{$columnlist}
					</select>
					<select name="moveto" data-isubmit="1">
						<option value="">移动到</option>
						{$columnlist}
					</select>-->
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