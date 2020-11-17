<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_fyeast extends Room {
	function __construct() {
		$this->set("name","风云东 ");
		$this->set("long",<<<LONG
    路的左右两边都是一望无际的庄稼地。顺此路再往前走，就是武
当山。顺眼望去，武当山并不高，也不是很雄伟。但满山松树，绿油
油的不时露出几个黄色的屋顶。给人一种宁静的感觉。

LONG
);
		$exits = array();
		$exits["north"] = "/u/palace/palace_path1";
		$exits["south"] = "/u/wudang/bwuroad1";
		$exits["west"] = "/d/fengyun/sroad6";
		$this->set("exits",$exits);
	}
}
?>
