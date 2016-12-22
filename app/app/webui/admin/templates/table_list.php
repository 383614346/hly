<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');
echo <<<EOT
-->
	<div class="v52fmbx">
<table class="display dataTable ui-table" data-table-ajaxurl="{$_M[url][own_form]}a=do_table_list_json" data-table-pageLength="10">
    <thead>
        <tr>
            <th width="25">排序</th>
            <th>标题</th>
            <th width="50">前台</th>
            <th width="50">推荐</th>
            <th width="30">置顶</th>
            <th width="70">更新时间</th>
        </tr>
    </thead>
	<tbody>
	</tbody>
    <tfoot>
        <tr>
            <th width="25">排序</th>
            <th>标题</th>
            <th width="50">前台</th>
            <th width="50">推荐</th>
            <th width="50">置顶</th>
            <th width="100">更新时间</th>
        </tr>
    </tfoot>
</table>
	</div>
<!--
EOT;
require $this->template('ui/foot');
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved..
?>