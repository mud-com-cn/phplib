<?php
class Cmd_enable {
	function main($user,$cmd) {
		if(count($cmd)<3) {
			$str = "您当前激发的技能有:\n";
			$enable = $user->skillenabled;
			forEach($enable as $k => $v) {
				$str .= sprintf("%-30s  :  %s\n",$k,$v);
			}
			$user->message($str);
			return 1;
		} else {
			$basic = $cmd[1];
			$skill = $cmd[2];
			$ret = $user->enable_skill($basic,$skill);
			switch($ret) {
			case -1:
				$user->message("没有".$basic."这种基础功法。\nenable失败。\n");
				return 1;
			case -2:
				$user->message("没有".$basic."这种高级功法。\nenable失败。\n");
				return 1;
			case -3:
				$user->message($basic."不是基础功法。\nenable失败。\n");
				return 1;
			case -4:
				$user->message($skill."不是可以enable的高级功法。\nenable失败。\n");
				return 1;
			case -5:
				$user->message($skill."不能被enable为".$basic."\nenable失败。\n");
				return 1;
			case -6:
				$user->message("基础功法".$basic."等级为0\nenable失败。\n");
				return 1;
			case -7:
				$user->message("高级功法".$skill."等级为0\nenable失败。\n");
				return 1;
			default :
				$user->message("成功将".$skill." enable到".$basic."上。\n");
				return 1;

			}
		}
	}
}
