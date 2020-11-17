<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jlongpool extends Room {
	function __construct() {
		$this->set("name","浸龙浴池");
		$this->set("long",<<<LONG
    一入门，热气扑面，白白的水气立刻包围了你。你依稀看到一个巨大的檀木水池,
水呈碧绿，散发着一种奇特的药香，水面上还漂着一片片红红的花瓣儿，你真想一下
子跳（ｊｕｍｐ）进去，闭上眼睛好好的放松一下。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/jlonglang3";
		$this->set("exits",$exits);
	}
}
?>
