<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_taihedian extends Room {
	function __construct() {
		$this->set("name","[1;33m太合殿[2;37;0m");
		$this->set("long",<<<LONG
    沿着丹埠踏阶而上，便是九重天子的金銮大殿了，又称太和殿。殿内共有七十二
根楠木柱。六根蟠龙金漆柱巍然耸立，正前方正是楠木金漆雕龙宝座。大殿宽广可容
千人，而金銮殿顶高达数丈，乃是琉璃玉瓦铺就，犹如黄金一般辉煌灿烂。

LONG
);
		$exits = array();
		$exits["out"] = "/d/fengyun/jinshuihe";
		$this->set("exits",$exits);
	}
}
?>
