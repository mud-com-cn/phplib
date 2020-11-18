<?php
class Cmd_hp {
	function main($user,$arg) {
		if($user->user_level()>= USER_LEVEL_WIZ) {
			if(count($arg)>=2) {
				array_shift($arg);
				$id = join(" ",$arg);
				if($ob = $user->env->find_in_inv($id)) {
					if($ob->user_level()<USER_LEVEL_NPC)
						$ob = $user;
				} else {
					$ob = $user;
				}
			} else {
				$ob = $user;
			}
		}
		$dbase = $ob->dbase;
		$str = $ob->shortname()."的属性如下：\n";
		$str .= sprintf(HIY."精：%-8d/%8d(%4d%s)%10s精力：%-8d/%8d\n",$dbase["jing"],$dbase["eff_jing"],floor($dbase["eff_jing"]*100/$dbase["max_jing"]),"%","",$dbase["jingli"],$dbase["max_jingli"]);
		$str .= sprintf(HIG."气：%-8d/%8d(%4d%s)%10s内力：%-8d/%8d\n",$dbase["qi"],$dbase["eff_qi"],floor($dbase["eff_qi"]*100/$dbase["max_qi"]),"%","",$dbase["neili"],$dbase["max_neili"]);
		$str .= sprintf(HIC."神：%-8d/%8d(%4d%s)%10s法力：%-8d/%8d\n",$dbase["shen"],$dbase["eff_shen"],floor($dbase["eff_shen"]*100/$dbase["max_shen"]),"%","",$dbase["fali"],$dbase["max_fali"]);
		$str .= sprintf(HIY."经验：%-8d%24s等级：%-8d\n".NOR,$dbase["exp"],"",$dbase["level"]);
		$user->message($str);
		return 1;
	}
}
