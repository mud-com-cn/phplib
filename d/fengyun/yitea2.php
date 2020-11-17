<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_yitea2 extends Room {
	function __construct() {
		$this->set("name","一品居二楼");
		$this->set("long",<<<LONG
    站在这里，打开小窗就可以看到对面银钩赌坊那在风中摇曳的闪亮银钩。再往
远处看，是一片梅林。梅林中露出一角小楼，正是小李飞刀昔日读书学剑的地方。
梅林无恙，仿佛比几年前开的更胜了。

LONG
);
		$exits = array();
		$exits["down"] = "/d/fengyun/yitea";
		$this->set("exits",$exits);
	}
}
?>
