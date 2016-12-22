<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');
echo <<<EOT
-->

<form method="POST" class="ui-from" name="myform" action="{$_M[url][own_form]}a=doformeditor" target="_self">
	<div class="v52fmbx">
		<h3 class="v52fmbx_hr">今日值班表<span class="tips">设置今日值班领导情况</span></h3>
<!--简短文本输入框-->
		<dl>
			<dt>代班局领导</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" value="{$dutys[dbld]}" name="textdbld" value="" placeholder="输入名称" data-required="1"/>
				</div>
				<span class="tips">代班局领导名称</span>
			</dd>
		</dl>
		<dl>
			<dt>总值班领导</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" value="{$dutys[zzbld]}" name="textzzbld" value="" placeholder="输入名称" data-required="1" />
				</div>
				<span class="tips">总值班领导名称</span>
			</dd>
			</dl>
			<dl>
			<dt>值班领导</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" value="{$dutys[zbld]}" name="textzbld" value="" placeholder="输入名称" data-required="1"/>
				</div>
				<span class="tips">值班领导名称</span>
			</dd>
			</dl>

		<dl class="noborder">
			<dt>&nbsp;</dt>
			<dd>
				<input type="submit" name="submit" value="保存" class="submit" />
			</dd>
		</dl>
	</div>
</form>

<!--
EOT;
require $this->template('ui/foot');
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved..
?>