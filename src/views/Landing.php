<?php

require_once("View.php");

class Landing extends View {
	
	public function render() {
		$this->renderHeader();
		$this->renderFooter();

	}
}


?>