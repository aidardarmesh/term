<?php
	$terminal_id = 6990;

	file_get_contents("https://daiyn.com/terminal/" . $terminal_id . "/printed/" . $_POST["order_id"]);