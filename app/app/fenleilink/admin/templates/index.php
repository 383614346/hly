<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');
echo <<<EOT
-->

<form method="POST" class="ui-from" name="myform" action="{$_M[url][own_form]}a=doformeditor" target="_self">
	<div class="v52fmbx">
		<h3 class="v52fmbx_hr">分类链接设置</h3>
	
		<dl>
			<dt>名称链接间用|分隔开</dt>
			<dd>淘宝->www.taobao.com</dd>
			<!--<span class="tips">输入格式链接名称|链接url</span>-->
		</dl>

<!--文本输入框-->
		<dl>
			<dt>分类链接一</dt>
			<dd class="ftype_textarea">
				<div class="fbox">
					<textarea name="link1" placeholder="淘宝->www.taobao.com">{$string1}</textarea>
				</div>
				<span class="tips">每一行只能添加一条分类链接</span>
			</dd>
		</dl>
		<dl>
			<dt>分类链接二</dt>
			<dd class="ftype_textarea">
				<div class="fbox">
					<textarea name="link2" placeholder="淘宝->www.taobao.com">{$string2}</textarea>
				</div>
				<span class="tips">每一行只能添加一条分类链接</span>
			</dd>
		</dl>
		<dl>
			<dt>分类链接三</dt>
			<dd class="ftype_textarea">
				<div class="fbox">
					<textarea name="link3" placeholder="淘宝->www.taobao.com">{$string3}</textarea>
				</div>
				<span class="tips">每一行只能添加一条分类链接</span>
			</dd>
		</dl>
		<dl>
			<dt>分类链接四</dt>
			<dd class="ftype_textarea">
				<div class="fbox">
					<textarea name="link4" placeholder="淘宝->www.taobao.com">{$string4}</textarea>
				</div>
				<span class="tips">每一行只能添加一条分类链接</span>
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
</textarea>
<!--
EOT;
require $this->template('ui/foot');
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved..
?>