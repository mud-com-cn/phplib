<?php
require_once(MUD_LIB.'/inherit/npc.php');
Class Npc_n_fengyun_testnpc extends Npc {
	function __construct() {
		$this->set("name","测试NPC");
		$this->set("id","testnpc");
		$this->set("long","没有用的长描述。");
	}
}
?>
