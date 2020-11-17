<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_gcang extends Room {
	function __construct() {
		$this->set("name","镖局货仓");
		$this->set("long",<<<LONG
    金狮镖局声誉如日中天，从未失镖。顾主的货物在这里堆积如山。镖局的伙计
们正在手忙脚乱的往镖车上装载货物。虽然每个伙计都已满头大汗，尽力而为，但
还是忙不过来。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/goldlion";
		$this->set("exits",$exits);
	}
}
?>
