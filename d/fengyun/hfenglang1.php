<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_hfenglang1 extends Room {
	function __construct() {
		$this->set("name","浣凰长廊");
		$this->set("long",<<<LONG
    这里是给到这儿的小姐们更衣入浴的，地上是五光十色的彩带和香味扑鼻的花
瓣，昂贵的衣裳满地都是，透过蒙蒙水雾，可以看到白腻的身躯，修长的大腿，坚
挺的胸膛，和乌黑的长发。。。。。。

LONG
);
		$exits = array();
		$exits["north"] = "/d/fengyun/hfenglang2";
		$exits["west"] = "/d/fengyun/hfeng";
		$this->set("exits",$exits);
	}
}
?>
