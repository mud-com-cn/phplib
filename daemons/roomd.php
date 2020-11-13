<?php
require_once(MUD_LIB."/temp/roomcontrol.php");
class Roomd extends RoomControl {
	function __construct() {
        }
	function getRoom($roomid) {
		return $this->rooms[$roomid];
	}
}
?>

