<?php
class Cmd_save {
	function main($user,$cmd) {
		$user->save();
		
		return 1;
	}
}
