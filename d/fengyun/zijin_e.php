<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_zijin_e extends Room {
	function __construct() {
		$this->set("name","[37m白虎门之巅[2;37;0m");
		$this->set("long",<<<LONG
    琉璃玉瓦有如黄金般灿烂辉煌，远远望去，红墙之下，风起云涌，四方云动！ 

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/zijin_s";
		$exits["west"] = "/d/fengyun/zijin_n";
		$exits["southwest"] = "/d/fengyun/zijin2";
		$this->set("exits",$exits);
	}
}
?>
