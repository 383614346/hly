<?php
class table{
	function table_add_list(){
		global $_M;
		$id = 'new-'.$_M[form][ai];
		$bigid = 'big_'.$_M[form][big];
		$classtype = $_M[form][tp]?$_M[form][tp]:1;
		$metinfo ="<tr class=\"even {$bigid} list_{$classtype} newlist\">
					<td class=\"met-center\"></td>
					<td class=\"met-center\"><input name=\"id\" type=\"checkbox\" value=\"{$id}\" checked></td>
					<td class=\"met-center\"><input type=\"text\" name=\"no_order-{$id}\" class=\"ui-input met-center\" style=\"width:20px;\" value=\"0\"></td>
					<td><span class=\"bigimg\"></span><input type=\"text\" name=\"name-{$id}\" class=\"ui-input listname\" value=\"\" placeholder=\"请输入栏目名称\" data-required=\"1\"></td>
					<td class=\"met-center\">
						<select name=\"nav_{$id}\">
							<option value=\"\">导航栏显示</option>
							<option value=\"0\" selected>{$_M[word][funNav1]}</option>
							<option value=\"1\">{$_M[word][funNav2]}</option>
							<option value=\"2\">{$_M[word][funNav3]}</option>
							<option value=\"3\">{$_M[word][funNav4]}</option>
						</select>
					</td>
					<td class=\"met-center\"></td>
					<td><input type=\"text\" name=\"foldername-{$id}\" class=\"ui-input\" value=\"\" data-required=\"1\" style=\"width:90%;\" placeholder=\"目录名称\" ></td>
					<td><a href=\"\" class=\"delet\">撤销</a></td>
				</tr>"; 
		echo $metinfo;
	}
	function table_add_json(){ //表格数据获取
		global $_M;

		//处理表格每列数据
		function listinfo($val,$metinfo,$none){
			global $_M;
			$add = ($val[classtype]>2||$val[module]>5||$val[module]<1)?'':"<span class=\"line\">|</span><a href=\"\" class=\"add\">添加子栏目</a>";
			$rarray[]=$metinfo?'<i class="fa fa-caret-right"></i>':'';
			$rarray[]="<input name=\"id\" type=\"checkbox\" value=\"{$val[id]}\">"; //第一列
			$rarray[]="<input type=\"text\" name=\"no_order-{$val[id]}\" class=\"ui-input met-center\" style=\"width:20px;\" value=\"{$val[no_order]}\">";
			$rarray[]="<span class=\"bigimg\"></span><input type=\"text\" name=\"name-{$val[id]}\" data-required=\"1\" class=\"ui-input listname\" value=\"{$val[name]}\">";
			$rarray[]="<select name='nav_{$val[id]}' data-checked='{$val[nav]}'><option value=''>导航栏显示</option><option value='0'>{$_M[word][funNav1]}</option><option value='1'>{$_M[word][funNav2]}</option><option value='2'>{$_M[word][funNav3]}</option><option value='3'>{$_M[word][funNav4]}</option></select>";
			$rarray[]=modname($val[module]);
			$rarray[]=$val[foldername];
			$rarray[]="<a href=\"\" class=\"edit\">设置</a>{$add}<span class=\"line\">|</span><a href=\"\" class=\"delet\" data-confirm='{$_M[word][js7]}'>删除</a>";
			$rarray['toclass']="{$none} big_{$val[bigclass]} list_".$val[classtype]; //给改行定义class类
			return $rarray;
		}
	
		/*获取表格ajax传递的参数*/
		$sval   = $_M[form]['search_title'];   //搜索关键词 
		$fval   = $_M[form]['search_fod'];     //搜索关键词 
		$mval   = $_M[form]['search_mod'];     //搜索关键词 
		
		/*查询表*/
		$search = $sval?"and name like '%{$sval}%' ":'';                        //获取搜索条件
		$search.= $fval!=''?"and nav = '{$fval}' ":'';                        //获取搜索条件
		$search.= $mval?"and module = '{$mval}' ":'';                        //获取搜索条件
		
		$table = load::sys_class('tabledata', 'new');
		$where = "lang='{$_M[form][lang]}' {$search}";
		$order = "no_order";
		$array = $table->getdata($_M[table][column], '*', $where, $order);
		
		foreach($array as $key=>$val){
			if($val[classtype]==1)$column1[] = $val;
			if($val[classtype]==2)$column2[$val[bigclass]][] = $val;
			if($val[classtype]==3)$column3[$val[bigclass]][] = $val;
		}	
		
		$none=$search?'':'none';
		$rarray = array();
		
		foreach($column1 as $val){
			$metinfo = count($column2[$val[id]])?1:0;
			$rarray[] = listinfo($val,$metinfo);
			foreach($column2[$val[id]] as $val2){
				$metinfo = count($column3[$val2[id]])?1:0;
				$rarray[] = listinfo($val2,$metinfo,$none);
				foreach($column3[$val2[id]] as $val3){
					$rarray[] = listinfo($val3,'',$none);
				}
			}
		}
		$table->rdata($rarray);
		/*
		 * 因栏目分级别且级别下可以出现不同模块，因此配合筛选、搜索需要考虑的逻辑问题有很多。
		 * 比如按模块筛选反馈系统，在二级栏目下的反馈系统就无法筛选出来。
		 * 本示例仅仅做为调用演示，并没有编写筛选、搜索的逻辑结构代码，大家在开发类似复杂结构的时候需要多费点脑细胞了。
		 */
	}
	
	function table_edit_json(){ //表格数据获取
		global $_M;
		
		/*获取表格ajax传递的参数*/
		$term1   = $_M[form]['search_title'];   //获取搜索关键词 
		$term2  = $_M[form]['search_displaytype'];   //获取搜索关键词 
		$term3 = $_M[form]['search_com_ok'];   //获取搜索关键词 
		//在还可以获取多个搜索关键词
		
		/*查询表*/
		$search = $term1    ?"and title       like '%{$term1}%' ":'';                        //增加查询条件
		$search.= $term2!=''?"and displaytype =     '{$term2}'  ":'';                 //获取查询条件
		$search.= $term3!=''?"and com_ok      =     '{$term3}'  ":'';                    //获取查询条件
		//如果有更多查询条件，还可以继续增加
		$table = load::sys_class('tabledata', 'new');
		$where = "lang='{$_M[form][lang]}' {$search}"; //在条件语句中加入查询条件 $search
		$order = "no_order";
		$array = $table->getdata($_M[table][news], '*', $where, $order);

		foreach($array as $key => $val){
			$list = array();
			$list[] = "<input name=\"id\" type=\"checkbox\" value=\"{$val[id]}\">";
			$list[] = "<input type=\"text\" name=\"no_order-{$val[id]}\" class=\"ui-input met-center\" style=\"width:20px;\" value=\"{$val[no_order]}\">";
			$list[] = "<a href=''>{$val[title]}</a>";
			$list[] = $val[displaytype]?'显示':'不显示';
			$list[] = $val[com_ok]?'是':'否';
			$list[] = $val[top_ok]?'是':'否';
			$list[] = date('Y-m-d',strtotime($val[updatetime]));
			$list[] = "<a href=\"{$_M[url][own_form]}a=do_editor&id={$val[id]}\" class=\"edit\">编辑</a><span class=\"line\">|</span><a href=\"{$_M[url][own_form]}a=do_del&id={$val[id]}\" class=\"delet\" data-confirm='{$_M[word][js7]}'>删除</a>";
			$rarray[] = $list;
		}	
		$table->rdata($rarray);
		
	}
	
	function table_list_json(){
		global $_M;
		$table = load::sys_class('tabledata', 'new');
		$where = "lang='{$_M[form][lang]}'";
		$order = "no_order";
		$array = $table->getdata($_M[table][news], '*', $where, $order);

		foreach($array as $key => $val){
			$list = array();
			$list[] = $val[no_order];
			$list[] = $val[description];
			$list[] = $val[displaytype]?'显示':'不显示';
			$list[] = $val[com_ok]?'是':'否';
			$list[] = $val[top_ok]?'是':'否';
			$list[] = date('Y-m-d',strtotime($val[updatetime]));
			$rarray[] = $list;
		}	
		$table->rdata($rarray);
	}
}
?>