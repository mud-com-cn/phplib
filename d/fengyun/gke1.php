<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_gke1 extends Room {
	function __construct() {
		$this->set("name","镖局厢房");
		$this->set("long",<<<LONG
    房间里布置很简单，只有一张小床，一个小几，和几张方凳。窗台上放着一个
磁杯，杯里插着几枝无名小花。房间虽不大，但是给人整洁舒适的感觉。这儿是金
狮镖局的镖师，趟子手和伙计们歇息的地方。

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/ginhall";
		$this->set("exits",$exits);
	}
}
?>
