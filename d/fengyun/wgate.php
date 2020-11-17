<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_wgate extends Room {
	function __construct() {
		$this->set("name","风云西城门");
		$this->set("long",<<<LONG
    西城门阁矮小而破旧，守城卫兵斜戴着红樱帽，搂着长枪在打瞌睡。也许因为
西城区所住皆贫困撩倒之徒，这里的治安和卫生都不是很好。狂风掠过之时，满地
垃圾随风飞舞，夜幕降临之后，惨号和狞笑声此起彼伏。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/wcloud5";
		$exits["west"] = "/d/fycycle/fywest";
		$exits["up"] = "/d/fywall/wupgate";
		$this->set("exits",$exits);
	}
}
?>
