<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_fyyage extends Room {
	function __construct() {
		$this->set("name","风云雅阁");
		$this->set("long",<<<LONG
    这里专门招待江湖上万儿极响亮的人物。能有幸坐在这的，不是一掷千金的豪
客，就是跺跺脚江湖四颤的一方霸主。整间房子的中央只有一张上等翠玉打磨成的
八仙桌，桌上放着四只御赐金杯。三面的墙上挂满了字画，剩下的一面是一道一垂
及地的红布挂帘。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/fysf";
		$exits["down"] = "/d/fengyun/fyge";
		$this->set("exits",$exits);
	}
}
?>
