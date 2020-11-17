<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_futhur extends Room {
	function __construct() {
		$this->set("name","红屋");
		$this->set("long",<<<LONG
    这是西城区唯一比较像样的建筑，但颜色很怪，一种血色干凝的暗红色。屋里
更是鬼气森森。房子无窗，一盏油灯忽明忽暗。以太极八卦图为底的招牌上用篆体
刻着四个字“生死已卜”，也是黯淡无光的红色。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/wcloud3";
		$this->set("exits",$exits);
	}
}
?>
