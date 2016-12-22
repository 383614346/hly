<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');
echo <<<EOT
-->
<form method="POST" class="ui-from" name="myform" action="{$_M[url][own_form]}&a={$a_edit}" target="_self">
	<div class="v52fmbx">
		<h3 class="v52fmbx_hr">基本设置</h3>
		<dl>
			<dt>所属栏目</dt>
			<dd class="ftype_select-linkage">
				<div class="fbox" data-selectdburl="{$_M[url][own_form]}a=doctun&module=2">
					<select name="class1" class="prov" data-required='1' data-checked="{$news[class1]}"></select>  
					<select name="class2" class="city" data-checked="{$news[class2]}"></select>
					<select name="class3" class="dist" data-checked="{$news[class3]}"></select>
				</div>
			</dd>
		</dl>
		
		<dl>
			<dt>标题</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input name="title" value="{$news[title]}" placeholder="请输入文章标题" type="text" data-required="1" data-errortxt="标题不能为空！">
				</div>
			</dd>
		</dl>
		
		<dl>
			<dt>发布人</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input name="issue" value="{$news[issue]}" type="text" style="width:40px;">
				</div>
			</dd>
		</dl>
		
		<dl>
			<dt>点击次数</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input name="hits" value="{$news[hits]}" type="text" style="width:40px;">
				</div>
				<span class="tips">点击次数越多，热门信息中排名越靠前</span>
			</dd>
		</dl>
		<dl>
			<dt>可选属性</dt>
			<dd class="ftype_checkbox ftype_transverse">
				<div class="fbox">
					<label><input name="com_ok" value="1" type="checkbox" data-checked="{$news[com_ok]}">推荐</label>
					<label><input name="top_ok" value="1" type="checkbox" data-checked="{$news[top_ok]}">置顶</label>
				</div>
			</dd>
		</dl>
		<h3 class="v52fmbx_hr">详细内容</h3>
		<dl>
			<dd class="ftype_ckeditor">
				<div class="fbox">
					<textarea name="content">{$news[content]}</textarea>
				</div>
			</dd>
		</dl>
		<h3 class="v52fmbx_hr">搜索引擎优化设置(seo)</h3>
		<dl>
			<dt>页面Title</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input name="ctitle" value="{$news[ctitle]}" type="text" placeholder="为空则使用SEO参数设置中设置的title构成方式">
				</div>
			</dd>
		</dl>
		
		<dl>
			<dt>关键词</dt>
			<dd class="ftype_tags">
				<div class="fbox">
					<input name="keywords" data-label="|" value="{$news[keywords]}" type="hidden">
				</div>
				<span class="tips">用于搜索引擎优化,可设置多个关键词</span>
			</dd>
		</dl>
		
		<dl>
			<dt>静态页面名称</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input name="filename" value="{$news[filename]}" type="text" style="width:80px;">
				</div>
				<span class="tips">为空则使用静态页面设置中设置的URL构成方式，不要加html后缀，不支持特殊字符</span>
			</dd>
		</dl>
		
		<dl>
			<dt>简短描述</dt>
			<dd class="ftype_textarea">
				<div class="fbox">
					<textarea name="description">{$news[description]}</textarea>
				</div>
			</dd>
		</dl>
		
		<dl>
			<dt>Tag标签</dt>
			<dd class="ftype_tags">
				<div class="fbox">
					<input name="tag" data-label="|" value="{$news[tag]}" type="hidden">
				</div>
				<span class="tips">可设置多个Tag标签</span>
			</dd>
		</dl>
		<h3 class="v52fmbx_hr">时间设置</h3>
		<dl>
			<dt>发布时间</dt>
			<dd class="ftype_day">
				<div class="fbox">
					<input name="addtime" value="{$news[addtime]}" type="input" data-day-type="2">
				</div>
			</dd>
		</dl>
		
		<dl>
			<dt>更新时间</dt>
			<dd class="ftype_day">
				<div class="fbox">
					<input name="updatetime" value="{$news[updatetime]}" type="input" data-day-type="2">
				</div>
			</dd>
		</dl>
		<h3 class="v52fmbx_hr">权限设置</h3>
		<dl>
			<dt>访问权限</dt>
			<dd class="ftype_select">
				<div class="fbox">
					<select name="access" data-checked="{$news[access]}">
						<option value="0">不限</option>
						<option value="1">普通会员</option>
						<option value="2">代理商</option>
						<option value="3">管理员</option>
					</select>
				</div>
			</dd>
		</dl>
		
		<dl>
			<dt>前台显示</dt>
			<dd class="ftype_radio ftype_transverse">
				<div class="fbox">
					<label><input name="displaytype" value="1" type="radio" data-checked="{$news[displaytype]}">显示</label>
					<label><input name="displaytype" value="0" type="radio">隐藏</label>
				</div>
			</dd>
		</dl>

		<dl class="noborder">
			<dt> </dt>
			<dd>
				<input name="submit" value="保存" class="submit" type="submit">
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