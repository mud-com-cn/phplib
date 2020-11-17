<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_ecloud1 extends Room {
	function __construct() {
		$this->set("name","广场东");
		$this->set("long",<<<LONG
    这里是风云城中三教九流，龙蛇混集之所。不管你是达官贵人，还是贩夫走卒，
只要你身上有两钱儿，在这里就会受到热情的招呼。任何你不知道的事，在这里打
听一下，都可以知道个八九不离十。整条街上有卖菜的，卖肉的，卖玩具的，卖艺
的，卖药的...，应有尽有。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/stone1";
		$exits["south"] = "/d/fengyun/marry_room";
		$exits["east"] = "/d/fengyun/ecloud2";
		$exits["west"] = "/d/fengyun/fysquare";
		$this->set("exits",$exits);
	}
}
?>
