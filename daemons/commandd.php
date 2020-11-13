<?php
require_once(MUD_LIB."/temp/commandcontrol.php");
class Commandd extends CommandControl {
	function __construct() {
	}
	function doCommand($user,$cmd) {
		$cmd = trim($cmd);
		if($user->get_temp("is_loging")) {
			$GLOBALS['app']->LOGIN_D->doLoginCmd($user,$cmd);
			return 1;
		} else {
			$verbs = explode(" ",$cmd);
			if(array_key_exists($verbs[0],$this->cmds)) {
				$this->cmds[$verbs[0]]->main($user,$verbs);
				return 1;
			} else {
				$user->message("什么？\n");
			}
		}
		return 1;
	}
}
?>
