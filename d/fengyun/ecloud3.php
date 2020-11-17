<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_ecloud3 extends Room {
	function __construct() {
		$this->set("name","东云大路");
		$this->set("long",<<<LONG
    这儿全不似广场的热闹，偶尔有几家店铺也少有人光顾，如果脚下不是东云大
路，简直不敢相信城中居然有这样的地方。北边的张家铁铺成天发出叮叮铛铛打铁
的声音，昼夜不停。而南面则是一家私塾学堂。但似乎并没有什么学生。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/washroom";
		$exits["north"] = "/d/fengyun/smithy";
		$exits["east"] = "/d/fengyun/ecloud4";
		$exits["west"] = "/d/fengyun/ecloud2";
		$this->set("exits",$exits);
	}
}
?>
