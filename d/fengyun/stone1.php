<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_stone1 extends Room {
	function __construct() {
		$this->set("name","阴暗石巷");
		$this->set("long",<<<LONG
    东云路往前几步，有一条阴暗的石巷，巷里散发着一种奇怪的霉腐味道。又夹
杂着一丝血腥，和干净宽敞的东云大路格格不入。又脏又臭的小河沟顺着巷侧缓缓
流淌，上面还漂着染满着黑血的绷带。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/stone2";
		$exits["south"] = "/d/fengyun/ecloud1";
		$this->set("exits",$exits);
	}
}
?>
