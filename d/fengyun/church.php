<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_church extends Room {
	function __construct() {
		$this->set("name","天主教堂");
		$this->set("long",<<<LONG
    这里的建筑别具一格，房顶特别高，成拱形，上面还有个巨大的十字架。房顶
上又有满幅的浮雕。雕的是一些金发碧眼，背生翅膀的小天使。教堂正中的十字架
上钉着一个全身是血，长发披面的塑像。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/chjian";
		$exits["east"] = "/d/fengyun/churchback";
		$exits["west"] = "/d/fengyun/swind2";
		$this->set("exits",$exits);
	}
}
?>
