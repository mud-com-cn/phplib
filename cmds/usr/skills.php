<?php
class Cmd_skills {
	function main($user,$arg) {
		$skills = $user->get_skill_list();
		$str = "";
		forEach($skills as $k=>$v) {
			$skillOb = $GLOBALS['app']->SKILL_D->getSkill($k);
			$skillname = $skillOb->get("skillname");
			$str .= sprintf(HIY."%-52s".NOR."%s%10d/%d\n",$skillname."(".$k.")","--",$v[0],$v[1]);
		}
		$user->message($str);
		return 1;
	}
}
