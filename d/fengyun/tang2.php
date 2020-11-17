<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_tang2 extends Room {
	function __construct() {
		$this->set("name","赏罚堂");
		$this->set("long",<<<LONG
    金钱帮帮规严明，凡有贪污受贿，无事生非，调戏民女之帮徒，都会在这里受
到应有的制裁。凡有巨功于金钱帮的，也会在这里受到帮主的赏赐和提拔。厅中悬
条幅书道：            赏罚分明

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/jhuang";
		$this->set("exits",$exits);
	}
}
?>
