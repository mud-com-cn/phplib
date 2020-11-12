<?php
class CmdQuit {
	function main($user,$cmd) {
		$user->leave();	
		$user->quit();
		return 1;
	}
}
