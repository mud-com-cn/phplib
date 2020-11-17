<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_fqkhotel extends Room {
	function __construct() {
		$this->set("name","凤求凰客栈");
		$this->set("long",<<<LONG
    前厅挂着一幅龙凤双飞的巨画。当门挂着对鸳鸯球。球上系着几个小小的黄铜
风铃。微风掠过，风铃发出清脆悦耳的叮咚声。大门两侧挂着斗大的大红灯笼，上
书凤凰两字。朱门上横批一个“求”字。门前一口大缸，为往来行人提供清水。

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/swind1";
		$this->set("exits",$exits);
	}
}
?>
