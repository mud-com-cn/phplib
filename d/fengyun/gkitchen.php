<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_gkitchen extends Room {
	function __construct() {
		$this->set("name","镖局厨房");
		$this->set("long",<<<LONG
    金狮镖局对伙计们十分款待，不但每月有薪金，而且还包吃住。这里就是伙计
们一日三餐的地方。厨房的墙上挂满了锅碗瓢盆，还有一些风干的卤味儿。房中放
着一张长台，长台的周围摆着几条长凳。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/goldlion";
		$this->set("exits",$exits);
	}
}
?>
