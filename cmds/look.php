<?php
class CmdLook {
	function main($user,$cmd) {
		$env = $user->env;
		if($env) {
			$user->message(HIB.$env->desc().NOR);
			$inv = $env->inv;
			$user->message("    这里有\n");
			foreach($inv as $k => $v) {
				$user->message(HIG.$v->shortname().NOR."\n");
			}
			$exits = $env->get("exits");
			if($exits) {
				$ks = array_keys($exits);
				$user->message("这里明显的出口有：".HIY.join(",",$ks).NOR."\n");
			}
		}
	}
}
