<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_swind5 extends Room {
	function __construct() {
		$this->set("name","南门北");
		$this->set("long",<<<LONG
    到处都散发着安祥宁静的气氛。街道西边的普生堂远近驰名，听说当年皇上游
览风云城时被刺，身受重伤，幸亏是普生的灵丹妙药才令皇上起死回生。堂中的金
匾就是御赐的。普生堂的对面是南宫钱庄。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/swind4";
		$exits["south"] = "/d/fengyun/sgate";
		$exits["east"] = "/d/fengyun/nanbank";
		$exits["west"] = "/d/fengyun/pusheng";
		$this->set("exits",$exits);
	}
}
?>
