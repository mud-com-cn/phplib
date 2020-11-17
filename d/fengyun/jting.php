<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jting extends Room {
	function __construct() {
		$this->set("name","会客厅");
		$this->set("long",<<<LONG
    大厅布置简单，几张太师椅围着一张八仙桌。房间的两侧是一些小巧玲珑的陈
设品。每当风吹入门，门口的风铃发出沙哑的低吟。红砖铺地，上面似乎还有条条
暗红色的花纹。大厅左右各有小门。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/jhuang1";
		$exits["north"] = "/d/fengyun/jhuang";
		$exits["east"] = "/d/fengyun/jinqian";
		$this->set("exits",$exits);
	}
}
?>
