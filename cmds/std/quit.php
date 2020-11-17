<?php
class Cmd_quit {
	function main($user,$cmd) {
		$user->leave();	
		$user->quit();
		return 1;
	}
}
