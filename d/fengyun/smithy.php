<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_smithy extends Room {
	function __construct() {
		$this->set("name","张家铁铺");
		$this->set("long",<<<LONG
    风云老少都喜欢在这里打造称手的铁器，从火炉中冒出的火光将墙壁映得通红，
屋子的角落里堆满了各式铁器，锄头、铁锤、铲子、长剑等，有的已经完工，有的
还只是个粗模，叮叮当当打铁的声音敲得满屋子响。门口有一个大木牌（ｓｉｇｎ）．

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/ecloud3";
		$this->set("exits",$exits);
	}
}
?>
