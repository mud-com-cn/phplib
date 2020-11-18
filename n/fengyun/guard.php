<?php
require_once(MUD_LIB.'/inherit/npc.php');
Class Npc_n_fengyun_guard extends Npc {
	function __construct() {
		Npc::__construct();
		$this->set("name","护卫npc");
		$this->set("id","guard");
		$this->set("long","没有用的长描述。");
		$this->set_skill("parry",50);
		$this->set_skill("dodge",50);
		$this->set_skill("unarmed",50);
		$this->set_skill("changquan",50);
		$this->enable_skill("unarmed","changquan");
	}
}
?>
