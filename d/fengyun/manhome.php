<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_manhome extends Room {
	function __construct() {
		$this->set("name","长乐坊");
		$this->set("long",<<<LONG
    这里本是一品钦差殷大人在风云城的衙门所在，自殷大人遗失了当今圣上的尚
方宝剑，被皇上一怒之下贬至济南为官后，旧日风光无限的衙门便门厅冷落，破败
不堪。后来一名行走江湖的落魄客却偏偏拣了这里摆开道场，玩起了江湖把戏，不
过牛皮倒真不是吹的，至今为止无人能拆穿这骗子的小把戏。这骗子也从中捞了不
少，更堂而皇之的在衙门旧址建起了这家长乐坊。东面的墙壁上高高挂了一个牌子
（ｓｉｇｎ），上面写着游戏的玩法。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/wcloud2";
		$this->set("exits",$exits);
	}
}
?>
