<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_yuljade extends Room {
	function __construct() {
		$this->set("name","玉龙珠宝店");
		$this->set("long",<<<LONG
    珠宝店的正中是条千年古玉雕成的祥龙，玉龙活灵活现，穿梭于祥云之中。龙
嘴中含玉球，玉球有拳头大小，翠绿欲滴。龙眼半睁半闭。四周的墙上挂满了各种
金玉制品和各种护身吉祥玉器。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/swind1";
		$this->set("exits",$exits);
	}
}
?>
