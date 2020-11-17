<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_zijin_n extends Room {
	function __construct() {
		$this->set("name","[33m玄武门之巅[2;37;0m");
		$this->set("long",<<<LONG
    琉璃玉瓦有如黄金般灿烂辉煌，远远望去，红墙之下，风起云涌，四方云动！ 

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/zijin_w";
		$exits["east"] = "/d/fengyun/zijin_e";
		$exits["southeast"] = "/d/fengyun/zijin1";
		$this->set("exits",$exits);
	}
}
?>
