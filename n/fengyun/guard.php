<?php
require_once(MUD_LIB.'/inherit/npc.php');
Class Npc_n_fengyun_guard extends Npc {
	function __construct() {
		$this->set("name","护卫npc");
		$this->set("id","guard");
		$this->set("long","没有用的长描述。");
	}
}
?>