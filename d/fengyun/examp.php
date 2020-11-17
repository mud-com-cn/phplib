<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_examp extends Room {
	function __construct() {
		$this->set("name","考场");
		$this->set("long",<<<LONG
    风云城人才辈出，凡是有志于宦途的风云年青人都要在这里通过第一次考试。
文武双全的前三名会被送入京都再试。风云的老一辈大多是望子成龙，每到一年一
度的考季，这里就会人山人海，看热闹的比参考的还多。。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/wcloud1";
		$this->set("exits",$exits);
	}
}
?>
