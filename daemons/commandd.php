<?php
require_once(MUD_LIB."/temp/commandcontrol.php");
class Commandd extends CommandControl {
	var $globalalias = array();
	function __construct() {
		$this->globalalias['e'] = "go east";
		$this->globalalias['w'] = "go west";
		$this->globalalias['s'] = "go south";
		$this->globalalias['n'] = "go north";
		$this->globalalias['sw'] = "go southwest";
		$this->globalalias['nw'] = "go northwest";
		$this->globalalias['se'] = "go southeast";
		$this->globalalias['ne'] = "go northeast";
		$this->globalalias['u'] = "go up";
		$this->globalalias['d'] = "go down";
		$this->globalalias['l'] = "look";
	}
	function doCommand($user,$cmd) {
		$cmd = trim($cmd);
		print_r($cmd."\n");
		if($user->get_temp("is_loging")) {
			return $GLOBALS['app']->LOGIN_D->doLoginCmd($user,$cmd);
		}
		$verbs = explode(" ",$cmd);
		if(array_key_exists($verbs[0],$this->cmds)) {
			$this->cmds[$verbs[0]]->main($user,$verbs);
			return 1;
		} else if($this->doGlobalAlias($user,$verbs)) {
			return 1;
		} else if($verbs[0][0] == '\'') {
			$verbs[0] = substr($verbs[0],1);
			array_unshift($verbs,"say");
			$this->cmds[$verbs[0]]->main($user,$verbs);
			return 1;	
		} else {
			$env = $user->env;
			if($env) {
				$exits = $env->get('exits');
				if($exits) {
					if(array_key_exists($verbs[0],$exits)) {	
						$user->env->tell_room_exclude($user->shortname()."离
开了。\n",$user);
                                                $user->move($GLOBALS['app']->ROOM_D->getRoom($exits[$verbs[0]]));
                                                $user->env->tell_room_exclude($user->shortname()."进
来了。\n",$user);
						return 1;
					}
				}
	
			}
		}
		$emote = $verbs[0];
		$v = $verbs;
		array_shift($v);
		$target = join(" ",$v);
		if($GLOBALS['app']->EMOTE_D->doEmote($user,$emote,$target)) {
		} else {
			$user->message("什么？\n");
		}
		return 1;
	}
	function doGlobalAlias($user,$verbs) {
		if(array_key_exists($verbs[0],$this->globalalias)) {
			$verbs[0] = $this->globalalias[$verbs[0]];
			$temp = join(" ",$verbs);
			$temp = explode(" ",$temp);
			if(array_key_exists($temp[0],$this->cmds)) {
				$this->cmds[$temp[0]]->main($user,$temp);
				return 1;
			}
		}
		return 0;
	}
}
?>
