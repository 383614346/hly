<?php
defined('IN_MET') or exit('No permission');//所有文件都是已这句话开头，保证系统单入口。

//load::sys_class('admin');//包含后台基类，“.class.php”可以省略。
load::sys_class('admin.class.php');
load::sys_class('nav.class.php');
class statis extends admin {//继承后台基类。类名称要与文件名一致
    function __construct() {
		global $_M;
		parent::__construct();

	}
	
    public function doindex(){//定义自己的方法
        global $_M;//引入全局数组
		require $this->template('own/index');
    }
    //表格编辑后提交方法
    function do_table_editsave(){
    	 	global $_M;//引入全局数组

		$year = $_M[form][year];//保存的类型
		$month = $_M[form][month];//保存的类型

		$serachTime = date(Y).date(m); //查询日期
		$serachUpMonthTime = date(Y).(date(m)-1);//查询日期的上月日期
		if(date(m) == 1){
			$serachUpMonthTime = (date(Y)-1).(12);//如果是一月分就退到前一年12月
		}
		if($year != null){
			$serachTime = $year.$month;
			if($month == 1){
				$serachUpMonthTime = ($year-1).(12);//查询日期的上月日期
			}else{
				$serachUpMonthTime = $year.($month-1);
			}
		}
//		$list =  [['1','支队1','0','0', '0','0'],
//	            ['2','支队2','0','0', '0','0'],
//	            ['3','支队3','0','0', '0','0'],
//	            ['4','支队4','0','0', '0','0'],
//	            ['5','支队5','0','0', '0','0'],
//	            ['6','支队6','0','0', '0','0'],
//	            ['7','支队7','0','0', '0','0'],
//	            ['8','支队8','0','0', '0','0']];
	            
      $list = array(array('1','支队1','0','0', '0','0'),
			array('2','支队2','0','0', '0','0'),
			array('3','支队3','0','0', '0','0'),
			array('4','支队4','0','0', '0','0'),
			array('5','支队5','0','0', '0','0'),
			array('6','支队6','0','0', '0','0'),
			array('7','支队7','0','0', '0','0'),
			array('8','支队8','0','0', '0','0'));

		$table = load::sys_class('tabledata', 'new');
	
		//获取到所有发布的文章数量

		$re = mysql_query("SELECT count(id) as 'count',issue FROM pol_news WHERE  issue != 'admin' AND issue != '总队' GROUP BY issue");
		$i=0;
		while($rs = mysql_fetch_assoc($re)){
			if($list[$i][1] == $rs[issue]){
				$list[$i][5] = $rs[count];	
			}
			$i++;
		}
//		
		//获取到本月发布总共的数据
		$re = mysql_query("SELECT count(id) as 'count',issue FROM pol_news WHERE date_format(addtime, '%Y%m ')= '".$serachTime."' and issue != 'admin' and issue != '总队' GROUP BY issue");
		
		while($rs = mysql_fetch_assoc($re)){
			for ($i=0; $i<count($list); $i++) {
				if($list[$i][1] == $rs[issue]){	
					$list[$i][3] = $rs[count];
				}
			} 
		}
		
		//获取本月发布采用文章的数据
		$re= mysql_query("SELECT count(id) as 'count',issue FROM pol_news WHERE date_format(addtime, '%Y%m ')= '".$serachTime."' AND com_ok = 1 and issue != 'admin' and issue != '总队' GROUP BY issue");
		$i = 0;
		while($rs = mysql_fetch_assoc($re)){
			for ($i=0; $i<count($list); $i++) {
				if($list[$i][1] == $rs[issue]){	
					$list[$i][4] = $rs[count];
				}
			} 
		}
		
		//获取上月发布采用文章的数据
		$re = mysql_query("SELECT count(id) as 'count',issue FROM pol_news WHERE date_format(addtime, '%Y%m ')= '".$serachUpMonthTime."' AND com_ok = 1 and issue != 'admin' and issue != '总队' GROUP BY issue");
		while($rs = mysql_fetch_assoc($re)){
			for ($i=0; $i<count($list); $i++) {
				if($list[$i][1] == $rs[issue]){	
					$list[$i][2] = $rs[count];
				}
			}
		}
		$list2 = array('排序','处室','上月采用','本月投稿', '本月采用','总共发布数');
        	array_push($list,$list2);
         $list_json = json_encode($list);
		require $this->template('own/pdf');
    }
  
   function  do_table_edit_json(){ //表格数据获取
		global $_M;//引入全局数组
    	
		$year = $_M[form][year];//保存的类型
		$month = $_M[form][month];//保存的类型

		$serachTime = date(Y).date(m); //查询日期
		$serachUpMonthTime = date(Y).(date(m)-1);//查询日期的上月日期
		if(date(m) == 1){
			$serachUpMonthTime = (date(Y)-1).(12);//如果是一月分就退到前一年12月
		}
		if($year != null){
			$serachTime = $year.$month;
			if($month == 1){
				$serachUpMonthTime = ($year-1).(12);//查询日期的上月日期
			}else{
				$serachUpMonthTime = $year.($month-1);
			}
		}
			$list = array(array('1','支队1','0','0', '0','0'),
			array('2','支队2','0','0', '0','0'),
			array('3','支队3','0','0', '0','0'),
			array('4','支队4','0','0', '0','0'),
			array('5','支队5','0','0', '0','0'),
			array('6','支队6','0','0', '0','0'),
			array('7','支队7','0','0', '0','0'),
			array('8','支队8','0','0', '0','0'));

		$table = load::sys_class('tabledata', 'new');
	
		//获取到所有发布的文章数量

		$re = mysql_query("SELECT count(id) as 'count',issue FROM pol_news WHERE  issue != 'admin' AND issue != '总队' GROUP BY issue");
		$i=0;
		while($rs = mysql_fetch_assoc($re)){
			if($list[$i][1] == $rs[issue]){
				$list[$i][5] = $rs[count];	
			}
			$i++;
		}
//		
		//获取到本月发布总共的数据
		$re = mysql_query("SELECT count(id) as 'count',issue FROM pol_news WHERE date_format(addtime, '%Y%m ')= '".$serachTime."' and issue != 'admin' and issue != '总队' GROUP BY issue");
		
		while($rs = mysql_fetch_assoc($re)){
			for ($i=0; $i<count($list); $i++) {
				if($list[$i][1] == $rs[issue]){	
					$list[$i][3] = $rs[count];
				}
			} 
		}
		
		//获取本月发布采用文章的数据
		$re= mysql_query("SELECT count(id) as 'count',issue FROM pol_news WHERE date_format(addtime, '%Y%m ')= '".$serachTime."' AND com_ok = 1 and issue != 'admin' and issue != '总队' GROUP BY issue");
		$i = 0;
		while($rs = mysql_fetch_assoc($re)){
			for ($i=0; $i<count($list); $i++) {
				if($list[$i][1] == $rs[issue]){	
					$list[$i][4] = $rs[count];
				}
			} 
		}
		
		//获取上月发布采用文章的数据
		$re = mysql_query("SELECT count(id) as 'count',issue FROM pol_news WHERE date_format(addtime, '%Y%m ')= '".$serachUpMonthTime."' AND com_ok = 1 and issue != 'admin' and issue != '总队' GROUP BY issue");
		while($rs = mysql_fetch_assoc($re)){
			for ($i=0; $i<count($list); $i++) {
				if($list[$i][1] == $rs[issue]){	
					$list[$i][2] = $rs[count];
				}
			}
		}
        $table->rdata($list);
	}
	   
}
?>