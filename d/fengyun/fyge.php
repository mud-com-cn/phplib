<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_fyge extends Room {
	function __construct() {
		$this->set("name","风云阁");
		$this->set("long",<<<LONG
    风云阁的主人就是当年天下大名鼎鼎的小李飞刀。虽然李探花已经隐退多时，
但是还有客人慕名来到此阁，以求一面之缘。阁中大红波斯地毯铺地，富丽堂皇。
朱红的大门两侧各挂一幅石刻的对联儿：
                        一门七进士
                        父子三探花

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/nwind1";
		$exits["up"] = "/d/fengyun/fyyage";
		$this->set("exits",$exits);
	}
}
?>
