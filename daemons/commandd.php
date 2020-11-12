<?php
class Commandd {
	var $cmds = array();
	function __construct() {
	}
	function init(){
		require_once(MUD_LIB."/cmds/look.php");
		$this->cmds['look'] = new Command();
	}
	function doCommand($user,$cmd) {
		print_r("in doCommand ".$cmd."\n");
		$cmd = trim($cmd);
		if($cmd == "look")
			$this->cmds['look']->main($user,$cmd);
	}
}
?>
