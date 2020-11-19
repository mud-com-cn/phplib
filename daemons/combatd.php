<?php
class Combatd  {
	function __construct() {
        }
	function init() {

	}
	function do_attack($from,$to) {
		//print_r(sprintf("from : unarmed %d dodge %d parry %d\n",$from->get_basic_level_enabled("unarmed"),$from->get_basic_level_enabled("dodge"),$from->get_basic_level_enabled("parry")));
		//print_r(sprintf("to : unarmed %d dodge %d parry %d\n",$to->get_basic_level_enabled("unarmed"),$to->get_basic_level_enabled("dodge"),$to->get_basic_level_enabled("parry")));
		$ap = (100+$from->get("level")*10)+($from->get_basic_level_enabled("unarmed")*50);
		$dp = (100+$to->get("level")*10)+($to->get_basic_level_enabled("dodge")*50);
		$pp = (100+$to->get("level")*10)+($to->get_basic_level_enabled("parry")*50);
		
		$fromskillOb = $from->get_skill_enabled("unarmed");
		$str = "";
		if($fromskillOb) {
			$ac = $fromskillOb->get("actions");
			$r = rand(0,count($ac)-1);
			$str .= $ac[$r]["action"];
		} else {
			$str .= "\$N攻击\$n，";
		}
		if(rand(0,$ap+$dp)>$ap) { // 闪避成功
			$toskillOb = $to->get_skill_enabled("dodge");
        	        if($toskillOb) {
                	        $ac = $toskillOb->get("dodges");
                        	$r = rand(0,count($ac)-1);
	                        $str .= $ac[$r]["dodge"];
        	        } else {
                	        $str .= "被\$n轻松闪开。";
               		}
		} else if (rand(0,$ap+$pp)>$ap) { //parry成功
			$toskillOb = $to->get_skill_enabled("parry");
			if($toskillOb) {
        	                $ac = $toskillOb->get("parrys");
                	        $r = rand(0,count($ac)-1);
                        	$str .= $ac[$r]["parry"];
	                } else {
        	                $str .= "却被\$n挡开了。";
                	}
		} else {
			$dmg = rand(1,30);
			$str .= "结果造成了".$dmg."点伤害，";
			$to->receive_damage($dmg,"qi",$from);
			$qi = $to->get("qi");
			$max_qi = $to->get("max_qi");
			$qi_percent = floor($qi*100/$max_qi);
			if($qi_percent>= 100) {
				$str .= "\$n神完气足。\n";
			} else if ($qi_percent >= 80) {
				$str .= "\$n气喘吁吁但是没有大碍。\n";
			} else if($qi_percent >= 60) {
				$str .= "\$n显得有些虚弱。\n";
			} else if($qi_percent >= 40) {
                                $str .= "\$n受伤有些严重。\n";
                        }else if($qi_percent >= 20) {
                                $str .= "\$n快挂掉了。\n";
                        }else {
                                $str .= "\$n已经濒临死亡。\n";
                        }
			// do damage!!
		}
		$str = str_replace("\$N",$from->shortname(),$str);
		$str = str_replace("\$n",$to->shortname(),$str);
		$from->env->tell_room($str."\n");
	}
}
?>

