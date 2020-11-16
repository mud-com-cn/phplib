<?php
class Logind {
	function __construct() {
        }
	function init() {
	}
	function doLoginCmd($user,$cmd) {
		switch($user->get_temp("login_step")) {
		case "getid":
			$user->set("id",$cmd);
			if($user->restore()) {
				$this->enterWorld($user);
				return;
			}
			$user->set_temp("login_step","getname");
			$user->message("请输入中文名：");
			break;
		case "getname":
			$user->set("name",$cmd);
			$user->message("进入世界。\n");
			$this->enterWorld($user);
			$user->save();
			break;
		}
	}
	function enterWorld($user) {
		$user->set_temp("is_loging",0);
		$user->set_temp("login_step",0);
		$room = $GLOBALS['app']->ROOM_D->getRoom(START_ROOM);
		$user->move($room);
		$user->setup();

	}
}
?>

