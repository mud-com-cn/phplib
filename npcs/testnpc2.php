<?php
require_once(MUD_LIB.'/inherit/npc.php');
Class Npcs_testnpc2 extends Npc {
	function __construct() {
		$this->set("name","测试NPC 2 for id test");
		$this->set("id","testnpc");
		$this->set("long","没有用的长描述。");
	}
}
?>
