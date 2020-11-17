<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_ponder extends Room {
	function __construct() {
		$this->set("name","洗礼池");
		$this->set("long",<<<LONG
    “黄沙百战穿金甲，不破楼兰终不还“，风云城里的官兵经常出外征战，这里
是他们回来接受洗礼（ｓａｌｕｔｅ），以求洗去杀孽之气的地方。布置得很简单，
偌大的一个屋子，中间一个水池，池中冒出袅袅雾气。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/ecloud4";
		$this->set("exits",$exits);
	}
}
?>
