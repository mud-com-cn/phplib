<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_ansheng extends Room {
	function __construct() {
		$this->set("name","安生棺材店");
		$this->set("long",<<<LONG
    店门口的招牌是几个已被雨淋日晒得变了颜色的花圈。店口的地上放着几口打
造好，但还没有上漆的薄皮棺材。 四面的墙上零乱的挂着几串纸钱和纸花。墙角
放着一口上好的红木棺材，但棺盖似乎并没有盖好。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/wcloud4";
		$this->set("exits",$exits);
	}
}
?>
