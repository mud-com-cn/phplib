<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_wcloud1 extends Room {
	function __construct() {
		$this->set("name","广场西");
		$this->set("long",<<<LONG
    风云广场在东，长乐坊在西，这里是风云城中风骚文人丛聚之地。据说天下赫
赫有名的小李探花就是在这里中的秀才。南边的考场每年都举行一次选拔考试，前
三名送入京都再试。北面则是探花诗台，是风骚文人们留下他们得意之作的地方。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/examp";
		$exits["north"] = "/d/fengyun/poemp";
		$exits["east"] = "/d/fengyun/fysquare";
		$exits["west"] = "/d/fengyun/wcloud2";
		$this->set("exits",$exits);
	}
}
?>
