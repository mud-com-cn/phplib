<?php
class CommandControl {
	var $cmds = array();
	function init(){
		require_once(MUD_LIB.'/cmds/quit.php');
		$this->cmds['quit'] = new Cmd_quit();
		require_once(MUD_LIB.'/cmds/look.php');
		$this->cmds['look'] = new Cmd_look();
		require_once(MUD_LIB.'/cmds/go.php');
		$this->cmds['go'] = new Cmd_go();
		require_once(MUD_LIB.'/cmds/say.php');
		$this->cmds['say'] = new Cmd_say();
		require_once(MUD_LIB.'/cmds/save.php');
		$this->cmds['save'] = new Cmd_save();
	}
}
?>
