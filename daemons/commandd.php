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
	function findCmd($user,$cmd) {
		$userlevel = $user->user_level();
		switch($userlevel) {
		case 0:
			if(array_key_exists($cmd,$this->cmdsStd)) {
				return $this->cmdsStd[$cmd];
			} else {
				return null;
			}
			break;
		case 1:
			if(array_key_exists($cmd,$this->cmdsUsr)) {
                                return $this->cmdsUsr[$cmd];
                        } else {
                                return null;
                        }
                        break;
		case 2:
			if(array_key_exists($cmd,$this->cmdsWiz)) {
                                return $this->cmdsWiz[$cmd];
                        } else {
                                return null;
                        }
                        break;
		default :
			return null;
			break;
		}
	}
	function doCommand($user,$cmd) {
		$cmd = trim($cmd);
		print_r($cmd."\n");
		if($user->get_temp("is_loging")) {
			return $GLOBALS['app']->LOGIN_D->doLoginCmd($user,$cmd);
		}
		$verbs = explode(" ",$cmd);
		print_r("doCommand() 1\n");
		if($cmdOb = $this->findCmd($user,$verbs[0])) {
		print_r("doCommand() 2\n");
			$cmdOb->main($user,$verbs);
			return 1;
		} else if($this->doGlobalAlias($user,$verbs)) {
		print_r("doCommand() 3\n");
			return 1;
		} else if(!strlen($cmd)){
			return 1;
		} else if($verbs[0][0] == '\'') {
			$verbs[0] = substr($verbs[0],1);
			array_unshift($verbs,"say");
			if($cmdOb = $this->findCmd($user,$verbs[0])) {
				$cmdOb->main($user,$verbs);
				return 1;	
			}
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
			if($cmdOb = $this->findCmd($user,$temp[0])) {
				$cmdOb->main($user,$temp);
				return 1;
			}
		}
		return 0;
	}
}
?>
