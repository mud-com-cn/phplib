<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_stopwin extends Room {
	function __construct() {
		$this->set("name","镇风兵器铺");
		$this->set("long",<<<LONG
    当今武林奇侠辈出，武林好汉空前众多，这里的生意也因此好得不得了。此处
的老板就是这四个甲子名气最响亮的金狮总镖头。这里的大掌柜则是当年大镖头的
儿子。这里的兵器应有尽有，绝对不会有买不到的。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/nwind4";
		$this->set("exits",$exits);
	}
}
?>
