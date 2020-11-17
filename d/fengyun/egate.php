<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_egate extends Room {
	function __construct() {
		$this->set("name","风云东城门");
		$this->set("long",<<<LONG
    风云东门高三丈，宽约二丈有余，尺许厚的城门上镶满了拳头般大小的柳钉。
门洞长约四丈，大约每隔两个时辰就换官兵把守。洞侧帖满了悬赏捉拿之类的官
府通谍。门洞西侧则是一条上城墙的窄梯。

LONG
);
		$exits = array();
		$exits["east"] = "/d/palace/palace_path1";
		$exits["west"] = "/d/fengyun/ecloud5";
		$exits["up"] = "/d/fywall/eupgate";
		$this->set("exits",$exits);
	}
}
?>
