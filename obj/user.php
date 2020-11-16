<?php
require_once(MUD_LIB.'/inherit/environment.php');
class User extends Environment {
	var $socket;
	function __construct($socket) {
		$this->socket = $socket;
	}
	function onCommand($buf) {
		//socket_write($this->socket,$buf,strlen($buf));
		$GLOBALS['app']->COMMAND_D->doCommand($this,$buf);
	}
	function message($msg) {
		socket_write($this->socket,$msg,strlen($msg));
	}
	function shortname() {
		return $this->get('name')."(".$this->get('id').")";
	}
	function quit() {
		$GLOBALS['app']->HEARTBEAT_D->stop_heartbeat($this);
		$GLOBALS['app']->SERVER_D->quit($this);
	}
	function save() {
		$str = json_encode($this->dbase);
		$this->message($str);
	}
	function restore() {

	}
	function query_save_file() {

	}
	function heart_beat() {
		$this->message($this->shortname()." HeartBteat (".HEART_BEAT." sec)\n");
	}
	function setup() {
		$GLOBALS['app']->HEARTBEAT_D->start_heartbeat($this);
	}
}
?>
