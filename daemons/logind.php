<?php
class Logind {
	function __construct() {
        }
	function init() {
	}
	function legalId($str) {
		if(!$str || strlen($str)<3)
			return 0;
		return 1;
	}
	function legalName($str) {
                if(!$str || strlen($str)<9)
                        return 0;
                return 1;
        }

	function doLoginCmd($user,$cmd) {
		switch($user->get_temp("login_step")) {
		case "getid":
			if(!$this->legalId($cmd)) {
				$user->message("输入的ID不合法，请重新输入：\n");
				return ;
			}
			$user->set("id",$cmd);
			if($user->restore()) {
				$this->enterWorld($user);
				return;
			}
			$user->set_temp("login_step","getname");
			$user->message("请输入中文名：");
			break;
		case "getname":
			if(!$this->legalName($cmd)) {
				$user->message("输入的name不合法，请重新输入：\n");
                                return ;
                        }
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
		if($user->get("id") == "akuma") {
			$user->set("IS_WIZARD",1);
		}
		$user->setup();

	}
}
?>

