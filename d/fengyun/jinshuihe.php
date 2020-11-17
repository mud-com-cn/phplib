<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jinshuihe extends Room {
	function __construct() {
		$this->set("name","[1;33m金水玉带河[2;37;0m");
		$this->set("long",<<<LONG
    一条宛如玉带般的金水河，清风徐来，鳞鳞水光仿佛玉带临风，栩栩如生，河
上五座白玉大理石石桥通向对岸。正中所谓“御路桥”，乃当今天子之路；其左右
称“王公桥”，是宗室亲王们走的；最外两桥方为“品级桥”，供一般官员行走。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/hall";
		$exits["enter"] = "/d/fengyun/taihedian";
		$this->set("exits",$exits);
	}
}
?>
