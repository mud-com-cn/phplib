<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_secret_room extends Room {
	function __construct() {
		$this->set("name","地下密室");
		$this->set("long",<<<LONG
    这里是一间窄小的密室，你的面前只有一个破旧的小床跟一些乾草。

LONG
);
	}
}
?>
