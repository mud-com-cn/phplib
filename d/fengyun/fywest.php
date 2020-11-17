<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_fywest extends Room {
	function __construct() {
		$this->set("name","风云西");
		$this->set("long",<<<LONG
    这是风云城西的一个市集，一条布满车痕的官道向西方和东方伸展。
由这向西就是进入沙漠，往来的商人很多，偶尔还有些士兵会巡逻到
这里。没天总有金狮镖局的镖头们押着镖车西去大漠，有些从此就没
有再回来过。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/sroad1";
		$exits["north"] = "/d/fengyun/road1";
		$exits["east"] = "/d/fengyun/wgate";
		$exits["west"] = "/d/songshan/dengfeng";
		$this->set("exits",$exits);
	}
}
?>
