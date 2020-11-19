<?php
class Cmd_skills {
	function main($user,$arg) {
		if(count($arg)<=1) {
			$ob = $user;
		} else {
			array_shift($arg);
                        $arg = join(" ",$arg);
                        $env = $user->env;
                        if(!$env) {
				$ob = $user;
                        }
                        if($ob = $env->find_in_inv($arg)) {
                        } else {
				$ob = $user;
			}
		}
		if($ob != $user) {
			if($ob->user_level()< USER_LEVEL_NPC) {
				$user->message("对方不是活物，没有技能！\n");
				return 1;
			}
		}
		if($user->user_level()< USER_LEVEL_WIZ) {
			if($ob != $user) {
				$user->message("你不是wizard，不能查看别人的技能。\n");
				return 1;
			}
		}
		$skills = $ob->get_skill_list();
		$skillenabled = $ob->skillenabled;
		$enabled = array();
		forEach($skillenabled as $k=>$v) {
			$enabled[] = $v;
		}	
		$str = $ob->shortname()."的技能如下:\n";

		forEach($skills as $k=>$v) {
			$skillOb = $GLOBALS['app']->SKILL_D->getSkill($k);
			$skillname = $skillOb->get("skillname");
			$str .= sprintf(HIY."%s%-52s".NOR."%s%10d/%d\n",in_array($k,$enabled)?HIG."*".HIY:HIG." ".HIY,$skillname."(".$k.")","--",$v[0],$v[1]);
		}
		if(count($skills) == 0) 
			$str .= "您没有任何技能。\n";
		$user->message($str);
		return 1;
	}
}
