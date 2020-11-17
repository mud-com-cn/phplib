<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_mianhua extends Room {
	function __construct() {
		$this->set("name","棉花坊");
		$this->set("long",<<<LONG
    每当天气渐冷，风云老少都会到这儿来将自己的冬衫，冬被弹一弹，这里的老
板娘更善长补衣服，补出来的衣服不但牢固，而且总是恰到好处地绣朵花，打个褶
儿什么的，一点儿也看不出补过的痕迹。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/ecloud4";
		$this->set("exits",$exits);
	}
}
?>
