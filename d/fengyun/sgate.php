<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_sgate extends Room {
	function __construct() {
		$this->set("name","风云南城门");
		$this->set("long",<<<LONG
    风云南门高三丈，宽约二丈有余，尺许厚的城门上镶满了拳头般大小的柳钉。
门洞长约四丈，大约每隔两个时辰就换官兵把守。洞侧帖满了悬赏捉拿之类的官
府通谍。门洞西侧则是一条上城墙的窄梯。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fycycle/fysouth";
		$exits["north"] = "/d/fengyun/swind5";
		$exits["up"] = "/d/fywall/supgate";
		$this->set("exits",$exits);
	}
}
?>
