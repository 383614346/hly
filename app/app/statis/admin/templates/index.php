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
	</div>
	<table class="display dataTable ui-table" data-table-ajaxurl="{$_M[url][own_form]}a=do_table_edit_json" data-table-pageLength="10">
	    <thead>
	        <tr>
	            <th>排序</th>
	            <th>处室</th>
	            <th>上月采用</th>
	            <th>本月投稿</th>
	            <th>本月采用</th>
	            <th>总共发布数</th>
	        </tr>
	    </thead>
		<tbody>
		</tbody>
	    <tfoot>
	        <tr>
	            <!--<th><input name="id" type="checkbox" data-table-chckall="id" value=""></th>-->
				<th colspan="6" class="formsubmit">
					<!--<input type="submit" name="save" value="保存排序" class="submit" />-->
					<select name="year" data-checked="2016" data-table-search="year">
						<option value="2015">2015</option>
						<option value="2016">2016</option>
					</select>
					<select name="month" data-checked="12" data-table-search="month">
						<option value="1">1月</option>
						<option value="2">2月</option>
						<option value="3">3月</option>
						<option value="4">4月</option>
						<option value="5">5月</option>
						<option value="6">6月</option>
						<option value="7">7月</option>
						<option value="8">8月</option>
						<option value="9">9月</option>
						<option value="10">10月</option>
						<option value="11">11月</option>
						<option value="12">12月</option>
					</select>
					<input type="submit" name="导出PDF" value="导出PDF" class="submit" data-confirm="确定到处PDF吗?"/>
				</dd>
				</th>
	        </tr>
	    </tfoot>
	</table>
	</div>
</form>
<script type="text/javascript">
//	$("#DataTables_Table_0_paginate").hide();

//	alert("");
</script>
<!--
EOT;
require $this->template('ui/foot');
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved..
?>