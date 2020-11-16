<?php
require_once(MUD_LIB."/temp/roomcontrol.php");
class Roomd extends RoomControl {
	function __construct() {
		
        }
	function getRoom($roomid) {
		if(array_key_exists($roomid,$this->rooms))
			return $this->rooms[$roomid];
		return null;
	}
}
?>

