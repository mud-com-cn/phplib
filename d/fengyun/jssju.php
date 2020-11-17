<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_jssju extends Room {
	function __construct() {
		$this->set("name","警世书局");
		$this->set("long",<<<LONG
    这是风云城中唯一的书局，是城中卖书最多最快的地方。老板大有名气，听说
是当今皇太子的老师。凡是京都出的新书，都被快马送到这里，然后刻板印刷。书
局里不但有很多风骚文人喜欢的诗词，还卖一些粗浅的功夫书，供城中居民练来强
身健体。

LONG
);
		$exits = array();
		$exits["east"] = "/d/fengyun/nwind1";
		$exits["west"] = "/d/fengyun/jsbackyard";
		$this->set("exits",$exits);
	}
}
?>
