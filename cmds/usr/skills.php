<?php
class Cmd_skills {
	function main($user,$arg) {
		$skills = $user->get_skill_list();
		$skillenabled = $user->skillenabled;
		$enabled = array();
		forEach($skillenabled as $k=>$v) {
			$enabled[] = $v;
		}	
		$str = "您的技能如下:\n";
		print_r($enabled);

		forEach($skills as $k=>$v) {
			$skillOb = $GLOBALS['app']->SKILL_D->getSkill($k);
			$skillname = $skillOb->get("skillname");
			print_r(in_array($k,$enabled));
			$str .= sprintf(HIY."%s%-52s".NOR."%s%10d/%d\n",in_array($k,$enabled)?HIG."*".HIY:HIG." ".HIY,$skillname."(".$k.")","--",$v[0],$v[1]);
		}
		if(count($skills) == 0) 
			$str .= "您没有任何技能。\n";
		$user->message($str);
		return 1;
	}
}
