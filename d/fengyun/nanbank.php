<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_nanbank extends Room {
	function __construct() {
		$this->set("name","南宫钱庄");
		$this->set("long",<<<LONG
    中原南宫世家，家财万贯，产业不可胜数。此间钱庄黑匾红字，正是南宫产业之
一。南宫钱庄的银票信誉极好，大江南北都可兑现。就是富可敌国的金钱帮，也难望
其项背。钱庄中央有一红木柜台，半人多高，上有牌（ｓｉｇｎ）一块。
                        南宫钱庄

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/swind5";
		$this->set("exits",$exits);
	}
}
?>
