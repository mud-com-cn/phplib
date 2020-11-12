<?php
require_once(MUD_LIB.'/inherit/environment.php');
class User extends Environment {
	var $socket;
	function __construct($socket) {
		$this->socket = $socket;
	}
	function onCommand($buf) {
		//socket_write($this->socket,$buf,strlen($buf));
		print_r("doCommand ".$buf."\n");
		$GLOBALS['app']->COMMAND_D->doCommand($this,$buf);
	}
	function message($msg) {
		socket_write($this->socket,$msg,strlen($msg));
	}
	function shortname() {
		return $this->get('name')."(".$this->get('id').")";
	}
}
?>
