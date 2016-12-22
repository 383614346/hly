<?php
defined('IN_MET') or exit('No permission');//所有文件都是已这句话开头，保证系统单入口。

load::sys_class('admin');//包含后台基类，如果是前台包含web.class.php。‘.class.php’ 可以省略。
load::sys_func('file');

class install extends admin {//继承后台基类。类名称要与文件名一致
	public $appNo;
    public function __construct() {
        parent::__construct();//如果重写了初始化方法,一定要调用父类的初始化函数。
		$this->appNo = 3003;
    }
	public function dosql(){//定义自己的方法
		global $_M;		
		$no = $this->appNo;
		$ver = '1.0.0';
		$m_name = 'statis';
		$m_class = 'statis';
		$m_action = 'doindex';
		$appname = '文章统计';
		$info = '支队每月发布的数量统计';
		$addtime = 1423045243;
		$updateime = 1423045243;
		if( DB::counter($_M['table']['applist'], "WHERE no={$this->appNo}", "*")<=0 ){
			$query = "INSERT INTO {$_M['table']['applist']} (
						no, 
						ver,
						m_name,
						m_class,
						m_action,
						appname,
						info,
						addtime,
						updatetime
						) VALUES (
						'{$no}', 
						'{$ver}',
						'{$m_name}',
						'{$m_class}',
						'{$m_action}',
						'{$appname}',
						'{$info}',
						'{$addtime}',
						'{$updateime}'
			)";
			if(DB::query($query)){			
				$continue = true;
			}else{
				$continue = false;
			}
		}else{
			$continue = false;
		}
		
		if($continue){
			echo '<br />应用安装成功！';
		}else{
			echo '<br />应用安装失败!可能已经安装过了！!';
		}
		
	}
}
?>