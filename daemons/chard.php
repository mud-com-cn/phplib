<?php
class Chard {
	function init() {
	}
	function init_new_user($ob){
		$jing = $ob->get_max("jing");
		$qi = $ob->get_max("qi");
		$shen = $ob->get_max("shen");
		$jingli = $ob->get_max("jingli");
		$neili = $ob->get_max("neili");
		$fali = $ob->get_max("fali");

		$ob->set("jing",$jing);
		$ob->set("eff_jing",$jing);
		$ob->set("max_jing",$jing);

		$ob->set("qi",$qi);
                $ob->set("eff_qi",$qi);
                $ob->set("max_qi",$qi);

		$ob->set("shen",$shen);
                $ob->set("eff_shen",$shen);
                $ob->set("max_shen",$shen);

		$ob->set("jingli",$jingli);
		$ob->set("max_jingli",$jingli);
		
		$ob->set("neili",$neili);
                $ob->set("max_neili",$neili);

		$ob->set("fali",$fali);
                $ob->set("max_fali",$fali);

		$ob->set("level",1);
		$ob->set("exp",0);


	}

	function init_new_npc($ob) {
		$this->init_new_user($ob);
	}
}
?>
