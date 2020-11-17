<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_ecloud2 extends Room {
	function __construct() {
		$this->set("name","东云路");
		$this->set("long",<<<LONG
    风云城中最杂最乱的地方。虽然如此，这里还是人来人往。只要你想得出来的，
这里就有，不管是吃的还是玩的。南面是一个破旧的小亭子，里面寄居这一个老道
士。北面则是风云城里老字号的布铺。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/jijian";
		$exits["north"] = "/d/fengyun/bupu";
		$exits["east"] = "/d/fengyun/ecloud3";
		$exits["west"] = "/d/fengyun/ecloud1";
		$this->set("exits",$exits);
	}
}
?>
