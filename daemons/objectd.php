<?php
require_once(MUD_LIB."/temp/objectcontrol.php");
class Objectd extends ObjectControl {
	function __construct() {
        }
	function new_object($npcid) {
		return clone($this->npcs[$npcid]);
	}
}
?>

