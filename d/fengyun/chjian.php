<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_chjian extends Room {
	function __construct() {
		$this->set("name","忏悔间");
		$this->set("long",<<<LONG
    一间只容一个人的小房间。房间的一面墙上有孔，这里的声音可以很清晰的传
到隔壁。房间里只有张小木凳和钉在墙上供人放东西的木板。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/church";
		$this->set("exits",$exits);
	}
}
?>
