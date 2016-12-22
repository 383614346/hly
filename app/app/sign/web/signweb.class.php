<?php
/**
佳 荣 科 技 qq 27888541
 */
load::sys_class('web');
class signweb extends web {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function doindex(){
		global $_M;
		session_start();
		
		$newsid = $_M['form']['newsid'];
		 
		//str_replace
		$newssignner = db::get_one("select * from  pol_news where id=".$newsid);
		
		$newssignner['signnerid']==null ? $dot="" :$dot= ',';
		$dbsignnerid['signnerid']=$newssignner['signnerid'].$dot.$_SESSION['usernameid'];
		DB::query("UPDATE pol_news SET signnerid ='".$dbsignnerid['signnerid']."' where id=".$newsid,"UNBUFFERED");
		DB::query("INSERT INTO pol_signtime (signnerid,newsid,time) VALUES ('".$_SESSION['usernameid']."','".$newsid."','".date("Y-m-d H:i:s")."')","UNBUFFERED");
		
		 
		
		
		
		$newssignner2 = DB::get_one("select * from  pol_news where id=".$newsid);
		$sigar=explode(',',$newssignner2['signnerid']);
		$signnername="";
		foreach($sigar as $k=>$id){
			
			$user=db::get_one("select * from pol_admin_table where id=".$id);
			$signnername.=$user['admin_id'];
		}
		echo $signnername;
		
	}
	public function docheck(){
		global $_M;
		session_start();
		echo "error";
	}
	
	public function doquery(){
		global $_M;
		session_start();
	}
}