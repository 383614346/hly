<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');

strstr($list['getterid'],'1')?$list['0']['checked']="checked=checked": "";
strstr($list['getterid'],'2')?$list['1']['checked']="checked=checked": "";
strstr($list['getterid'],'3')?$list['2']['checked']="checked=checked": "";
strstr($list['getterid'],'4')?$list['3']['checked']="checked=checked": "";
strstr($list['getterid'],'5')?$list['4']['checked']="checked=checked": "";
strstr($list['getterid'],'6')?$list['5']['checked']="checked=checked": "";
strstr($list['getterid'],'7')?$list['6']['checked']="checked=checked": "";
strstr($list['getterid'],'8')?$list['7']['checked']="checked=checked": "";
echo <<<EOT
-->

<link rel="stylesheet" href="{$_M[url][own_tem]}css/metinfo.css?{$jsrand}" />
<form method="POST" class="ui-from article_add" name="myform" action="{$_M[url][own_form]}a={$a}" target="_self"><!--123-->
	<input type="hidden" name='id' value="{$_M['form']['id']}" />
	<input type="hidden" name="addtime_l" value="{$list['addtime']}">
	<input type="hidden" name="imgurl_l" value="{$list['imgurl']}">
	<input type="hidden" name="imgurls_l" value="{$list['imgurls']}">
	<input type="hidden" name="no_order" value="{$list['no_order']}">
	<input type="hidden" name="select_class1" value="{$_M['form']['select_class1']}">
	<input type="hidden" name="select_class2" value="{$_M['form']['select_class2']}">
	<input type="hidden" name="select_class3" value="{$_M['form']['select_class3']}">
    <div class="v52fmbx">
		<dl>
			<dt><em class="required">*</em>所属栏目</dt>
			<dd class="ftype_select-linkage">
					<div class="fbox pull-left" data-selectdburl="{$_M[url][own_form]}a=docolumnjson&type=1">
						<select name="class1" class="prov" data-required="1" data-checked="{$list[class1]}"></select>
						<select name="class2" class="city" data-checked="{$list[class2]}"></select>
						<select name="class3" class="dist" data-checked="{$list[class3]}"></select>
					</div>
				<span class="tips pull-left" style="margin-left:20px;"><a href="{$_M[url][site_admin]}index.php?lang=cn#metnav_25" target="_blank">栏目管理</a></span>
			</dd>
		</dl>
		<dl>
			<dt><em class="required">*</em>所属模板</dt>
			<dd class="ftype_select-linkage">
			     <div class="fbox">
					<label><input type="radio" id="show_templet_1" name="show_templet" value="1" data-checked="{$list[show_templet]}" /> 内容页</label>&nbsp;&nbsp; 
					<label><input type="radio" id="show_templet_2" name="show_templet" value="2" data-checked="{$list[show_templet]}" data-showhide="show_templet_2" /> 通知</label>&nbsp;&nbsp;
					<label><input type="radio" id="show_templet_3" name="show_templet" value="3" data-checked="{$list[show_templet]}" data-showhide="show_templet_3" /> 内刊</label>
				</div>
			</dd>
		</dl>
		<dl class="show_templet_2 none">
			<dt>发布部门</dt>
			<dd class="ftype_input">
			     <div class="fbox">
					<input type="text" name="gj_title" value="{$list[gj_title]}" max_length="25" />
				</div>
			</dd>
		</dl>
		<dl class="show_templet_3 none">
			<dt>书刊版本</dt>
			<dd class="ftype_input">
			     <div class="fbox">
					<input type="text" name="book_version" value="{$list[book_version]}" max_length="25" />
				</div>
			</dd>
		</dl>
		
		<dl>
			<dt><em class="required">*</em>文章标题</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="title" value="{$list[title]}" data-required="1" />
				</div>
			</dd>
		</dl>
		<h3 class="v52fmbx_hr">详细内容</h3>
		<dl>
			<dd class="ftype_ckeditor">
				<div class="fbox">
					<textarea name="content" data-ckeditor-y="500">{$list[content]}</textarea>
				</div>
			</dd>
		</dl>
		<dl>
			<dt>是否签收</dt>
			<dd class="ftype_select-linkage">
			     <div class="fbox">
					<label><input type="radio" id="is_qs_0" name="is_qs" value="0" data-checked="{$list[is_qs]}" data-showhide="is_qs_0" /> 否</label>&nbsp;&nbsp; 
					<label><input type="radio" id="is_qs_1" name="is_qs" value="1" data-checked="{$list[is_qs]}" data-showhide="is_qs_1" /> 是</label>&nbsp;&nbsp;
				</div>
			</dd>
		</dl>
		<h3  class="v52fmbx_hr is_qs_1 none">签收人</h3>
		<dl class="is_qs_1 none">
			<dt>签收人</dt>
			<dd class="ftype_checkbox ftype_transverse">
				<div class="fbox">
					<lable><input type="checkbox" name="getterid" value="1" {$list['0']['checked']}>支队1     签收时间:    {$articletime1['time']}</lable> </br>
					<lable><input type="checkbox" name="getterid" value="2" {$list['1']['checked']}>支队2     签收时间:    {$articletime2['time']}</lable>   </br>
					<lable><input type="checkbox" name="getterid" value="3" {$list['2']['checked']}>支队3     签收时间:    {$articletime3['time']}</lable>   </br>
					<lable><input type="checkbox" name="getterid" value="4" {$list['3']['checked']}>支队4     签收时间:    {$articletime4['time']}</lable>   </br>
					<lable><input type="checkbox" name="getterid" value="5" {$list['4']['checked']}>支队5     签收时间:    {$articletime5['time']}</lable>   </br>
					<lable><input type="checkbox" name="getterid" value="6" {$list['5']['checked']}>支队6     签收时间:    {$articletime6['time']}</lable>   </br>
					<lable><input type="checkbox" name="getterid" value="7" {$list['6']['checked']}>支队7     签收时间:    {$articletime7['time']}</lable>   </br>
					<lable><input type="checkbox" name="getterid" value="8" {$list['7']['checked']}>支队8     签收时间:    {$articletime8['time']}</lable>   </br>
				</div>
				 
			</dd>
		</dl>
		<dl>
			<dt>是否弹窗</dt>
			<dd class="ftype_select-linkage">
			     <div class="fbox">
					<label><input type="radio" id="is_tc_0" name="is_tc" value="0" data-checked="{$list[is_tc]}" /> 否</label>&nbsp;&nbsp; 
					<label><input type="radio" id="is_tc_1" name="is_tc" value="1" data-checked="{$list[is_tc]}" /> 是</label>&nbsp;&nbsp;
				</div>
			</dd>
		</dl>
<!--
EOT;
	//超级管理员和总队之外不能看见的内容 s
    if($list[adminid] == 11){
echo <<<EOT
-->
		<h3 class="v52fmbx_hr">SEO设置</h3>
		<dl>
			<dt>自定义页面title</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="ctitle" value="{$list[ctitle]}" />
				</div>
				<span class="tips">为空则系统自动构成，可以到 营销-SEO 中设置构成规则。</span>
			</dd>
		</dl>
		<dl>
			<dt>关键词</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="keywords" value="{$list[keywords]}" />
				</div>
				<span class="tips">多个关键词请用 , 或 | 隔开</span>
			</dd>
		</dl>
		<dl>
			<dt>描述文字</dt>
			<dd class="ftype_textarea">
				<div class="fbox">
					<textarea name="description">{$list[description]}</textarea>
				</div>
				<span class="tips">为空则系统自动抓取详情</span>
			</dd>
		</dl>
		<dl>
			<dt><abbr title="显示在详情页底部，用于聚合内容">TAG标签</abbr></dt>
			<dd class="ftype_tags">
				<div class="fbox">
					<input name="tag" type="hidden" data-label="|" value="{$list[tag]}">
				</div>
				<span class="tips">点击 + 号输入选项名，再点击 + 号或回车完成添加</span>
			</dd>
		</dl>
		<dl>
			<dt>静态页面名称</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="filename" data-ajaxcheck-url="{$_M[url][own_form]}a=docheck_filename&id={$_M['form']['id']}" style="width:200px;" value="{$list[filename]}" />
				</div>
				<span class="tips">支持中文、大小写字母、数字、下划线</span>
			</dd>
		</dl>
		<h3 class="v52fmbx_hr">其它设置</h3>
		<dl>
			<dt>发布人</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="issue" style="width:100px;" value="{$list[issue]}" />
				</div>
			</dd>
		</dl>
		<dl>
			<dt>访问量</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="hits" style="width:100px;" value="{$list[hits]}" />
				</div>
			</dd>
		</dl>
		<dl>
			<dt>链接至</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="links" value="{$list[links]}" />
				</div>
				<span class="tips">请输入要链接到的网址，设置后访问该信息将直接跳转到设置的网址。</span>
			</dd>
		</dl>
		<dl>
			<dt>访问权限</dt>
			<dd class="ftype_select">
				<div class="fbox">
					{$access_option}
				</div>
			</dd>
		</dl>
		<dl>
			<dt>状态</dt>
			<dd class="ftype_checkbox ftype_transverse">
				<div class="fbox">
					<label><input name="displaytype" type="checkbox" value="1" data-checked="{$list[displaytype]}">审核</label>
					<label><input name="com_ok" type="checkbox" value="1" data-checked="{$list[com_ok]}">采用</label>
					<label><input name="top_ok" type="checkbox" value="1" data-checked="{$list[top_ok]}">置顶</label>
				</div>
			</dd>
		</dl>
		<dl>
			<dt>更新时间</dt>
			<dd class="ftype_day">
				<div class="fbox">
					<input type="input" name="updatetime" data-day-type = "2" value="{$list[updatetime]}">
				</div>
			</dd>
		</dl>
<!--
EOT;
if($_M['config']['met_webhtm']){
	$list['addtype'] = 1;
	$disabled = 'disabled';
	$tips = '<span class="tips">定时发布不支持静态页面，请关闭静态页面。（可以使用伪静态）</span>';
}
echo <<<EOT
-->
		<dl style="display:none;">
			<dt>发布时间</dt>
			<dd class="ftype_day">
					<div class="form-inline" style="margin-bottom:10px;">
					<div class="radio">
						<label>
							<input type="radio" name="addtype" value="1" data-checked="{$list[addtype]}">
							立即发布
						</label>
					</div>
				</div>
				<div class="form-inline" style="margin-bottom:10px;">
					<div class="radio">
						<label>
							<input type="radio" name="addtype" value="2" {$disabled} >
							定时发布
						</label>
					</div>
					<div class="form-group" style="margin-left:10px;">
						<div class="fbox">
							<input type="input" name="addtime" data-day-type = "2" {$disabled} value="{$list[addtime]}">
						</div>
					</div>
				</div>
				{$tips}
			</dd>
		</dl>
<!--
EOT;
    //超级管理员和总队之外不能看见的内容 e
	}
echo <<<EOT
-->
		<dl>
			<dt>封面图片</dt>
			<dd class="ftype_upload">
				<div class="fbox">
					<input 
						name="imgurl" 
						type="text" 
						data-upload-type="doupimg"
						value="{$list[imgurl]}" 
					/>
				</div>
				<span class="tips">当没有手动上传图片时候，会自动提取您内容第一张图片作为封面（此功能需要模板支持）</span>
			</dd>
		</dl>
    </div>
	<div class="met_affix_save bg-success">
		<button type="submit" class="btn btn-success">发布文章</button>
	</div>
</form>
<!--
EOT;
require $this->template('ui/foot');
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved.
?>