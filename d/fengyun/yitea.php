<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_yitea extends Room {
	function __construct() {
		$this->set("name","一品居");
		$this->set("long",<<<LONG
    卖的是各地的名茶，冲茶的水是从枫叶泉专程汲来，冲茶的壶是名贵的紫砂壶，
冲茶的方法也是最讲究的：每壶茶的第一杯是用来养壶的。所以这里冲出的茶都有
一种纯厚的香气。

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/swind3";
		$exits["up"] = "/d/fengyun/yitea2";
		$this->set("exits",$exits);
	}
}
?>
