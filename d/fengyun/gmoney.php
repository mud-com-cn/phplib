<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_gmoney extends Room {
	function __construct() {
		$this->set("name","镖局账房");
		$this->set("long",<<<LONG
    这里是金狮镖局出入镖银的账房，整间屋子是由坚硬的花岗石砌成的。连唯一
的一个小窗上都镶满拇指粗细的钢条。屋角有小床。这里由总镖头最亲信的人日夜
把守。不但如此，房中还有黄铜警铃，铃声一响，镖局伙计们就会蜂拥而至。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/ghall";
		$this->set("exits",$exits);
	}
}
?>
