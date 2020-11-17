<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_yangsheng extends Room {
	function __construct() {
		$this->set("name","养生舍");
		$this->set("long",<<<LONG
    养生舍四壁皆空，唯墙上书道：不有中有，不无中无。不色中色，不空中空。
非有为有，非无为无。色非为色，非空为空。空即是色，色即是色。色无定色，色
即是空。空无定空，空即是色。知空不空，知色不色。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/pusheng";
		$this->set("exits",$exits);
	}
}
?>
