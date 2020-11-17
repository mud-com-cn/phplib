<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jlonglang2 extends Room {
	function __construct() {
		$this->set("name","浸龙走廊");
		$this->set("long",<<<LONG
    一人多高，只容两人并行的檀香木走廊，廊中的两侧陈列着一些奇花异草。滚
滚热气从走廊的一头冒出，将檀木地板打得又湿又滑，你几乎要扶着栏杆才不会滑
倒。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/jlonglang1";
		$exits["west"] = "/d/fengyun/jlonglang3";
		$this->set("exits",$exits);
	}
}
?>
