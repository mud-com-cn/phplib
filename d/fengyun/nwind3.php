<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_nwind3 extends Room {
	function __construct() {
		$this->set("name","北风大街");
		$this->set("long",<<<LONG
    这里显然就不如靠广场那头热闹了，两侧各有一幢小楼，楼上整日飘着白色的
水雾，骄阳下象是青烟缕缕升起。大街的西首是供风云男人们泡澡和桑拿的浸龙堂，
而东首则是当今武林第一美人天天要去，风云城里无人不晓的浣凰堂。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/nwind4";
		$exits["south"] = "/d/fengyun/nwind2";
		$exits["east"] = "/d/fengyun/hfeng";
		$exits["west"] = "/d/fengyun/jlong";
		$this->set("exits",$exits);
	}
}
?>
