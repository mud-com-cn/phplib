<?php
class Cmd_set_skill {
	function main($user,$arg) {
		if(count($arg) == 1) {
			$user->message("你要设置什么技能？\n");
			return 1;
		} else {
			array_shift($arg);
			$skid = join(" ",$arg);
			$skOb = $GLOBALS['app']->SKILL_D->getSkill($skid);
			if(!$skOb) {
				$user->message("没有这个技能？\n");
				return 1;
			} else {
				$user->set_skill($skid,100);
			}
		}
		return 1;
	}
}
