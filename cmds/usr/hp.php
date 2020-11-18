<?php
class Cmd_hp {
	function main($user,$arg) {
		$user->message("test of user_level = ".USER_LEVEL_USER." (user ) cmds\n");
		return 1;
	}
}
