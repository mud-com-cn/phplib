<?php
class Cmd_say {
	function main($user,$arg) {
		$env = $user->env;
		if(!$env)
			return 0;
		if(count($arg)< 1) {
			return 0;
		} else if(count($arg)==1) {
			$env->tell_room(HIY.$user->shortname()."自言自语。\n".NOR."\n");
		} else {
			$a2 = $arg;
			array_splice($a2,0,1);
			$env->tell_room(HIY.$user->shortname()."说：".implode(" ",$a2).NOR."\n");
		}
		return 1;
	}
}
