<?php
class Cmd_fight {
	function main($user,$cmd) {
		if(count($cmd) <= 1) {
			return 1;
		} else if(count($cmd) >= 2) {
			array_shift($cmd);
			$arg = join(" ",$cmd);
			$env = $user->env;
			if(!$env) {
				return 1;
			}
			if($ob = $env->find_in_inv($arg)) {
				$user->add_enemy($ob);
				return 1;
			} else {
				return 1;
			}
		}
		return 1;
		
	}
}
