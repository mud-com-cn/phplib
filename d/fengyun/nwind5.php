<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_nwind5 extends Room {
	function __construct() {
		$this->set("name","北门南");
		$this->set("long",<<<LONG
    风街在这里渐渐变窄，街道两旁的店铺群立而又参差不齐。街的东边是一所小
小的城隍庙，庙门破旧不堪。门上依稀的用木炭涂着一支手，这只手里似乎抓着十
三支短箭。据说这里晚上常有鬼魂的出现。街的西边则是一家包子店。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/ngate";
		$exits["south"] = "/d/fengyun/nwind4";
		$exits["east"] = "/d/fengyun/hiretem";
		$exits["west"] = "/d/fengyun/baozipu";
		$this->set("exits",$exits);
	}
}
?>
