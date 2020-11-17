<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jlonglang1 extends Room {
	function __construct() {
		$this->set("name","浸龙走廊");
		$this->set("long",<<<LONG
    穿过浸龙的月形拱门，前面是一人多高，只容两人并行的檀香木走廊，廊中的
两侧陈列着一些奇花异草。滚滚热气从走廊的一头冒出，将檀木地板打得又湿又滑，
你几乎要扶着栏杆才不会滑倒。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/jlonglang2";
		$exits["east"] = "/d/fengyun/jlong";
		$this->set("exits",$exits);
	}
}
?>
