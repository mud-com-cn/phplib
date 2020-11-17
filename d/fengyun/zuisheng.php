<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_zuisheng extends Room {
	function __construct() {
		$this->set("name","醉生小馆");
		$this->set("long",<<<LONG
    这里卖最烈也是最劣的白酒。一杆已经被风扯裂的酒旗上画着一个用红圈起来
的“酒”字。几根竹竿撑着一块业已变黑的白帆布，白布下放着几张破旧的木桌和
方凳，木桌上零零散散地放着几双木筷和几个崩了口的小碟儿。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/wcloud5";
		$this->set("exits",$exits);
	}
}
?>
