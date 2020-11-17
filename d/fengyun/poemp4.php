<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_poemp4 extends Room {
	function __construct() {
		$this->set("name","[1;33m探花阁四楼[2;37;0m");
		$this->set("long",<<<LONG
    少年侠气，交结五都雄。肝胆洞，毛发耸。立谈中，死生同，一诺千金重。推
翘勇，矜豪纵，轻盖拥，联飞鞚，斗城东。轰饮酒垆，春色浮寒甕，吸海垂虹。闲
呼鹰嗾犬，白羽摘雕弓，狡穴俄空。乐匆匆。似黄梁梦，辞丹凤，明月共，漾孤篷。
官冗從，怀倥傯，落尘笼，簿书丛。鶡弁如云众，供粗用，忽奇功。笳鼓动，渔阳
弄，思悲翁，不请长缨，繋取天骄种，剑吼西风。恨登山临水，手动七弦洞，日送
归鸿。
[2;37;0m
LONG
);
		$exits = array();
		$exits["down"] = "/d/fengyun/poemp3";
		$exits["up"] = "/d/fengyun/poemp5";
		$this->set("exits",$exits);
	}
}
?>
