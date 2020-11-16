<?php
class Cmd_look {
	function main($user,$cmd) {
		$env = $user->env;
		if($env) {
			$user->message(HIB.$env->desc().NOR);
			$inv = $env->inv;
			$user->message("    这里有\n");
			for($i=count($inv)-1;$i>=0;$i--) {
				$user->message($inv[$i]->shortname()."\n");
			}
			$exits = $env->get("exits");
			if($exits) {
				$ks = array_keys($exits);
				$user->message("这里明显的出口有：".HIY.join(",",$ks).NOR."\n");
			}
		}
	}
}
