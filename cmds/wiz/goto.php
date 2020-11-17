<?php
class Cmd_goto {
	function main($user,$arg) {
		$user->message("test of wiz message(of user_level 2)\n");
		return 1;
	}
}
