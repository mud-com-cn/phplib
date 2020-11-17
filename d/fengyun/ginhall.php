<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_ginhall extends Room {
	function __construct() {
		$this->set("name","镖局内院");
		$this->set("long",<<<LONG
    这里是镖局伙计们辛苦之余，休息放松的院子。院子的中央横七竖八的架着几
根竹竿，想必是用来晾晒衣服的。院子的周围有几间小房，是供没有家的年青伙计
们住的。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/gke3";
		$exits["north"] = "/d/fengyun/gke2";
		$exits["east"] = "/d/fengyun/gke1";
		$exits["west"] = "/d/fengyun/ghall";
		$this->set("exits",$exits);
	}
}
?>
