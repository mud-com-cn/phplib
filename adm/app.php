<?php
class App {
	var $SERVER_D;
	var $COMMAND_D;
	function __construct() {
		require_once(MUD_LIB.'/daemons/commandd.php');
		$this->COMMAND_D = new Commandd();
		$this->COMMAND_D->init();
		require_once(MUD_LIB.'/daemons/serverd.php');
		$this->SERVER_D = new Serverd(); 
		$this->SERVER_D->init();
	}
}
?>
