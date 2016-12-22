<?php
class form{
	function columnjson(){
		global $_M;
		$array = column_sorting(2);
		$metinfo = array();
		$i=0;
		$metinfo['citylist'][$i]['p']='请选择';
		foreach($array['class1'] as $key=>$val){ //一级级栏目
			if($val[module] == $_M[form][module] || !$_M[form][module]){
				$i++;
				$metinfo['citylist'][$i]['p']['name']=$val[name];
				$metinfo['citylist'][$i]['p']['value']=$val[id];
				
				if(count($array['class2'][$val[id]])){ //二级栏目
					$k=0;
					foreach($array['class2'][$val[id]] as $key=>$val2){
						$metinfo['citylist'][$i]['c'][$k]['n']['name']=$val2[name];
						$metinfo['citylist'][$i]['c'][$k]['n']['value']=$val2[id];
						
						if(count($array['class3'][$val2[id]])){ //三级栏目
							$j=0;
							foreach($array['class3'][$val2[id]] as $key=>$val3){
								$metinfo['citylist'][$i]['c'][$k]['a'][$j]['s']['name']=$val3[name];
								$metinfo['citylist'][$i]['c'][$k]['a'][$j]['s']['value']=$val3[id];
								$j++;
							}
						}
						$k++;
						
					}
				}
			}
		}
		echo json_encode($metinfo);
	}
}
?>