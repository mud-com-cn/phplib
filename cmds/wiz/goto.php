<?php
class Cmd_goto {
	function main($user,$arg) {
		if(count($arg) == 1) {
			$user->message("你要飞去哪里？\n");
		} else {
			array_shift($arg);
			$to = join(" ",$arg);
			$toRoom = $GLOBALS['app']->ROOM_D->getRoom($to);
			if($toRoom) {
				$user->env->tell_room(HIC.$user->shortname().HIC."卷起一阵妖风消失了。\n".NOR);
				$user->move($toRoom);
				$user->env->tell_room(HIC.$user->shortname().HIC."在一阵妖风显出身形。\n".NOR);
			} else {
				$user->message("没有这个房间。\n");
			}	
		}
		return 1;
	}
}
