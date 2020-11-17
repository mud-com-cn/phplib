<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_swind1 extends Room {
	function __construct() {
		$this->set("name","广场南");
		$this->set("long",<<<LONG
    北面就是风云的中心广场。这里是风云城中大富人家去集市的必经之路。豪富
的行人导致了这里的崎形繁荣。大街西侧的玉龙珠宝店人进人出，拥挤不堪。东侧
则是专门为有钱人的远方朋友到风云城来玩时所准备的凤求凰客栈。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/fysquare";
		$exits["south"] = "/d/fengyun/swind2";
		$exits["east"] = "/d/fengyun/fqkhotel";
		$exits["west"] = "/d/fengyun/yuljade";
		$this->set("exits",$exits);
	}
}
?>
