<?php
require_once(MUD_LIB.'/inherit/room.php');
Class Room_d_fengyun_tang3 extends Room {
	function __construct() {
		$this->set("name","化尸堂");
		$this->set("long",<<<LONG
    金钱帮已经买通官府，官府对帮中的所作所为大都视而不见。但金钱帮为铲除
异己而双手血腥，结下了众多仇家。此处正是焚烧罪状和尸体的后堂。两人高的青
铜炉火焰正盛。一股焦尸的恶臭弥漫了整个大厅（ｂｕｒｎ）。

LONG
);
		$exits = array();
		$exits["south"] = "/d/fengyun/jhuang";
		$this->set("exits",$exits);
	}
}
?>
