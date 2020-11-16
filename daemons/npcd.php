<?php
require_once(MUD_LIB."/temp/npccontrol.php");
class Npcd extends NpcControl {
	function __construct() {
        }
	function newObject($npcid) {
		return clone($this->npcs[$npcid]);
	}
}
?>

