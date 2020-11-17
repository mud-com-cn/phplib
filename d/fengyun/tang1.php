<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_tang1 extends Room {
	function __construct() {
		$this->set("name","恩怨堂");
		$this->set("long",<<<LONG
    堂正中檀木香案，案上燃着几炷香，整间屋檀香袅袅。凡是入此堂的人，都愿
把以往恩怨一笔勾消。如果你有愧你的所作所为，想忘记已往的恩恩怨怨，重新做
人，只需在这里跪下（ＫＮＥＥＬ）。

LONG
);
		$exits = array();
		$exits["west"] = "/d/fengyun/jhuang";
		$this->set("exits",$exits);
	}
}
?>
