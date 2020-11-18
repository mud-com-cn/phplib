<?php
class Cmd_set_skill {
	function main($user,$arg) {
		if(count($arg) <= 2) {
			$user->message("你要设置什么技能？（set_skill skill level）\n");
			return 1;
		} else {
			$skid = $arg[1];
			$sklv = intval($arg[2]);
			if($sklv <= 0 ) {
				$user->message("等级必须大于0\n");
			}
			$skOb = $GLOBALS['app']->SKILL_D->getSkill($skid);
			if(!$skOb) {
				$user->message("没有这个技能。现有测试技能 dodge move force literate parry\n");
				return 1;
			} else {
				$user->set_skill($skid,$sklv);
				$user->message("设置好了。\n");
			}
		}
		return 1;
	}
}
