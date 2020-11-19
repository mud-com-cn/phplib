<?php
class Cmd_score {
	function main($user,$arg) {
		if($user->user_level()>= USER_LEVEL_WIZ) {
			if(count($arg)>=2) {
				array_shift($arg);
				$id = join(" ",$arg);
				if($ob = $user->env->find_in_inv($id)) {
					if($ob->user_level()<USER_LEVEL_NPC)
						$ob = $user;
				} else {
					$ob = $user;
				}
			} else {
				$ob = $user;
			}
		} else {
			$ob = $user;
		}
		$dbase = $ob->dbase;
		$str = "【".($ob->get("title")?$ob->get("title"):"普通百姓")." ".$ob->shortname()."】\n";
		$str .= "你是一位".$ob->get("age")."岁的".$ob->get("gener")."性".$ob->get("race")."\n";
		$str .= "你总计杀死了".$ob->get("PKS")."位玩家和".$ob->get("NKS")."位NPC\n";
		$str .= sprintf("力量：  %-3d/%3d 悟性：  %-3d/%3d 根骨：  %-3d/%3d 容貌：  %-3d/%3d \n",10,10,10,10,10,10,10,10);
		$str .= sprintf("福源：  %-3d/%3d 灵性：  %-3d/%3d 速度：  %-3d/%3d 韧性：  %-3d/%3d \n",10,10,10,10,10,10,10,10); 
		$user->message($str);
		return 1;
	}
}
