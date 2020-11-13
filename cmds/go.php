<?php
class Cmd_go {
	function main($user,$arg) {
		if(count($arg)<1) {
			return 0;
		} else if(count($arg) ==1) {
			$user->message("你要往那个方向走？\n");
			return 0;
		} else {
			$env = $user->env;
			if($env) {
				$exits = $env->get("exits");
				if($exits) {
					if(array_key_exists($arg[1],$exits)) {
						$user->env->tell_room_exclude($user->shortname()."离开了。\n",$user);
						$user->move($GLOBALS['app']->ROOM_D->getRoom($exits[$arg[1]]));
						$user->env->tell_room_exclude($user->shortname()."进来了。\n",$user);
					} else {
						$user->message("这里没有明显的出口。\n");
					}
				}
			}
		}
		return 1;
	}
}
