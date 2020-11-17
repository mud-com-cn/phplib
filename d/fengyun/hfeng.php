<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_hfeng extends Room {
	function __construct() {
		$this->set("name","浣凰堂");
		$this->set("long",<<<LONG
    浣凰堂的门面比以前大多了，四面墙上风干的花环散发着醉人的香气。大堂的
中央还是当年那个古色古香的青铜仙鹤，鹤嘴里面飘出袅袅青烟，沁人心脾。大堂
的右边是一个小小的柜台，台子的后面有一个木架，架子上挂满了白毛巾。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/hfenglang1";
		$exits["west"] = "/d/fengyun/nwind3";
		$this->set("exits",$exits);
	}
}
?>
