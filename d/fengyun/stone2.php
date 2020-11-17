<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_stone2 extends Room {
	function __construct() {
		$this->set("name","石巷尽头");
		$this->set("long",<<<LONG
    石巷不深，很快到了尽头，一堵高墙挡住去路。墙上有道窄门，墙角有一狗洞，
一条脏稀稀的小河沟从狗洞中流出，时而不时的，一条条浸满血水的绷带从狗洞中
流出，散发出腐臭的气味。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/sroom";
		$exits["south"] = "/d/fengyun/stone1";
		$this->set("exits",$exits);
	}
}
?>
