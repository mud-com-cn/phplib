<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jsbackyard extends Room {
	function __construct() {
		$this->set("name","警世书局");
		$this->set("long",<<<LONG
    这里是书局后院，很多雇工正在帮老板抄写书稿。
    你可以和读万里先生问一下有关工作（work）的事情。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/jssju";
		$this->set("exits",$exits);
	}
}
?>
