<?php

abstract class View {
	abstract public function render();

	public function renderHeader() {
		?>
		<!DOCTYPE html>
		<html>
				<head>
						<title>Throw-a-Coin-in-the-Fountain</title>
						<meta charset="utf-8">
						<link type="text/css" href="src/css/main.css" rel="stylesheet"/>
				</head>
				<body>
		<?php
	}
	public function renderFooter() {
			?>
					</body>
			</html>
			<?php
	}
}
?>