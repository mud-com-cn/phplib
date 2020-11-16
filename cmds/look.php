<?php
class Cmd_look {
	function main($user,$cmd) {
		if(count($cmd) < 1) {
			return 1;
		} else if(count($cmd)== 1) {
			$env = $user->env;
			if($env)
				$this->look_room($user,$env);
			return 1;
		} else if(count($cmd) >= 2) {
			print_r($cmd);
			array_shift($cmd);
			$arg = join(" ",$cmd);
			$env = $user->env;
			if(!$env) {
				return 1;
			}
			if($ob = $env->find_in_inv($arg)) {
				$user->message($ob->shortname()."\n");
				return 1;
			} else {
				$exits = $env->get("exits");
				if(array_key_exists($arg,$exits)) {
					$room = $GLOBALS['app']->ROOM_D->getRoom($exits[$arg]);
					if($room) {
						$this->look_room($user,$room);
						return 1;
					}
				}
				$user->message("你要看什么？\n");
			}
		}
		return 1;
		
	}
	function look_room($user,$room) {
		$user->message(HIB.$room->desc().NOR);
		$inv = $room->inv;
		$user->message("    这里有\n");
		for($i=count($inv)-1;$i>=0;$i--) {
			$user->message($inv[$i]->shortname()."\n");
		}
		$exits = $room->get("exits");
		if($exits) {
			$ks = array_keys($exits);
			$user->message("这里明显的出口有：".HIY.join(",",$ks).NOR."\n");
		}
	}
}
