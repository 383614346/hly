<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');
echo <<<EOT
-->

<form method="POST" class="ui-from" name="myform" action="{$_M[url][own_form]}a=doformeditor" target="_self">
	<div class="v52fmbx">
		<h3 class="v52fmbx_hr">常用功能<span class="tips">描述文字，用于说明该设置的作用。</span></h3>
	
		<dl>
			<dt>描述文字</dt>
			<dd>描述文字</dd>
		</dl>
		
<!--简短文本输入框-->
		<dl>
			<dt>简短文本输入框</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="textjd" value="" placeholder="提示文字，为空时显示，输入文字后消失。" data-required="1" />
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>
		
<!--文本输入框-->
		<dl>
			<dt>文本输入框</dt>
			<dd class="ftype_textarea">
				<div class="fbox">
					<textarea name="test2" placeholder="提示文字，为空时显示，输入文字后消失。">{$_M['config']['变量名称']}</textarea>
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>
		
<!--单选-->
		<dl>
			<dt>单选</dt>
			<dd class="ftype_radio">
				<div class="fbox">
					<label><input name="radio1" type="radio" value="1" data-checked="1">选项一</label>
					<label><input name="radio1" type="radio" value="2">选项二</label>
					<label><input name="radio1" type="radio" value="3">选项三</label>
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>		

<!--说明-->
		<dl>
			<dd class="ftype_description">
			描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述
			文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字
			描述文字描述文字描述文字描述文字描述文字
			</dd>
		</dl>
		
<!--多选-->
		<dl>
			<dt>多选</dt>
			<dd class="ftype_checkbox">
				<div class="fbox">
					<label><input name="checkbox1" type="checkbox" value="1" data-checked="1|2|3">选项一</label>
					<label><input name="checkbox1" type="checkbox" value="2">选项二</label>
					<label><input name="checkbox1" type="checkbox" value="3">选项三</label>
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>
		
<!--下拉菜单-->
		<dl>
			<dt>下拉选项</dt>
			<dd class="ftype_select">
				<div class="fbox">
					<select name="gthrtrt" data-checked="5">
						<option value="">请选择</option>
						<option value="1">选项一</option>
						<option value="2">选项二</option>
						<option value="3">选项三</option>
						<option value="4">选项四</option>
						<option value="5">选项五</option>
					</select>
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>

<!--上传组件-->
		<dl>
			<dt>上传组件</dt>
			<dd class="ftype_upload">
				<div class="fbox">
					<input 
						name="met_logo" 
						type="text" 
						data-upload-type="doupimg"
						value="{$_M['config']['met_logo']}" 
					/>
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>
		
<!--编辑器（小）-->
		<dl>
			<dt>编辑器（小）</dt>
			<dd class="ftype_ckeditor">
				<div class="fbox">
					<textarea name="ckeditor" data-ckeditor-type="1">{$_M['config']['变量名称']}</textarea>
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>

<!--编辑器（大）-->
		<h3 class="v52fmbx_hr">编辑器（大）</h3>
		<dl>
			<dd class="ftype_ckeditor">
				<div class="fbox">
					<textarea name="ckeditormax">{$_M['config']['变量名称']}</textarea>
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>
	
		<h3 class="v52fmbx_hr">扩展功能</h3>
		
<!--城市联动菜单-->
		<dl>
			<dt>城市联动菜单</dt>
			<dd class="ftype_select-linkage">
				<div class="fbox">
					<select name="select1" class="prov"></select>  
					<select name="select2" class="city"></select>
					<select name="select3" class="dist"></select>
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>

<!--栏目联动菜单-->
		<dl>
			<dt>栏目联动菜单</dt>
			<dd class="ftype_select-linkage">
				<div class="fbox" data-selectdburl="{$_M[url][own_form]}a=doctun">
					<select name="select4" class="prov"></select>  
					<select name="select5" class="city"></select>
					<select name="select6" class="dist"></select>
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>

<!--颜色选择器-->
		<dl>
			<dt>颜色选择器</dt>
			<dd class="ftype_color">
				<div class="fbox">
					<input type="text" name="color" value="#0000ff" />
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>
		
<!--日期选择器-->
		<dl>
			<dt>日期选择器（天）</dt>
			<dd class="ftype_day">
				<div class="fbox">
					<input type="input" name="timess" value="{$_M['config']['变量名称']}" />
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>
		
<!--日期选择器-->
		<dl>
			<dt>日期选择器（小时）</dt>
			<dd class="ftype_day">
				<div class="fbox">
					<input type="input" data-day-type="2" name="变量名称" value="{$_M['config']['变量名称']}" />
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>
		
<!--滑块-->
		<dl>
			<dt>滑块</dt>
			<dd class="ftype_range">
				<div class="fbox">
					<input 
						type="text"
						name="range"  
						data-rangemin='0'
						data-rangemax='150'
						value="20" 
					/>
					<span>像素</span>
				</div>
			</dd>
		</dl>

<!--标签增加器-->
		<dl>
			<dt>标签增加器</dt>
			<dd class="ftype_tags">
				<div class="fbox">
					<input name="tags" type="hidden" data-label="|" value="metinfo@metinfo.cn" />
				</div>
				<span class="tips">描述文字，用于说明该设置的作用。</span>
			</dd>
		</dl>

		<h3 class="v52fmbx_hr">动态隐藏显示选项</h3>		
<!--显示隐藏-->
		<dl>
			<dt>单选</dt>
			<dd class="ftype_radio">
				<div class="fbox">
					<label><input name="radion" type="radio" value="1" data-checked="1" data-showhide="radio_1">方案一显示</label>
					<label><input name="radion" type="radio" value="2" data-showhide="radio_2">方案二显示</label>
					<label><input name="radion" type="radio" value="3">都不显示</label>
				</div>
			</dd>
		</dl>
		
		<dl>
			<dt>多选</dt>
			<dd class="ftype_radio">
				<div class="fbox">
					<label><input name="checkboxn" type="checkbox" value="1" data-showhide="radio_1">方案一显示</label>
					<label><input name="checkboxn" type="checkbox" value="2" data-showhide="radio_2">方案二显示</label>
					<label><input name="checkboxn" type="checkbox" value="3">没事</label>
				</div>
			</dd>
		</dl>

<!--方案一-->
		<dl class="radio_1 none">
			<dt>方案一</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="textjdn" value="" />
				</div>
			</dd>
		</dl>
		
<!--方案二-->
		<dl class="radio_2 none">
			<dt>方案二</dt>
			<dd class="ftype_input">
				<div class="fbox">
					<input type="text" name="textjdn2" value="" />
				</div>
			</dd>
		</dl>		
		
<!--弹窗-->
		<h3 class="v52fmbx_hr">弹窗</h3>
		<dl>
			<dd>
				<a href="#" class="ui-addlist metalert">提示框(alert)</a>
				<a href="#" class="ui-addlist metconfirm">确定框(confirm)</a>
				<a href="{$_M[url][own_form]}a=dowindow" class="ui-addlist metwindow">自定义内容弹窗(window)</a>
			</dd>
		</dl>
		<dl class="noborder">
			<dt>&nbsp;</dt>
			<dd>
				<input type="submit" name="submit123" value="保存" class="submit" />
			</dd>
		</dl>
	</div>
</form>

<textarea id="mywindow" class="none">
	<form method="POST" class="ui-from" name="myform" action="{$_M[url][own_form]}a=dowindoweditor" target="_self">
		<div class="v52fmbx">
			<h3 class="v52fmbx_hr">常用功能</h3>
			<dl>
				<dt>简短文本输入框</dt>
				<dd class="ftype_input">
					<div class="fbox">
						<input type="text" name="textjdx" value="" placeholder="提示文字，为空时显示，输入文字后消失。" data-required="1" />
					</div>
					<span class="tips">描述文字，用于说明该设置的作用。</span>
				</dd>
			</dl>
			<dl>
				<dt>单选</dt>
				<dd class="ftype_radio">
					<div class="fbox">
						<label><input name="radio1x" type="radio" value="1" data-checked="1">选项一</label>
						<label><input name="radio1x" type="radio" value="2">选项二</label>
						<label><input name="radio1x" type="radio" value="3">选项三</label>
					</div>
					<span class="tips">描述文字，用于说明该设置的作用。</span>
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