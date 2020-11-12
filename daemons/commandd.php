<?php
class Commandd {
	var $cmds = array();
	function __construct() {
	}
	function init(){
		require(MUD_LIB."/cmds/look.php");
		$this->cmds['look'] = new CmdLook();
		require(MUD_LIB."/cmds/quit.php");
                $this->cmds['quit'] = new CmdQuit();
	}
	function doCommand($user,$cmd) {
		print_r("in doCommand ".$cmd."\n");
		$cmd = trim($cmd);
		if($cmd == "look") {
			$this->cmds['look']->main($user,$cmd);
		} else if ($cmd == "quit") {
			$this->cmds['quit']->main($user,$cmd);
		}
	}
}
?>
