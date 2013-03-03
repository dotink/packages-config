<?php

	if (!json_decode(file_get_contents('repositories.json'))) {
		echo "Invalid JSON Syntax\n";
	} else {
		echo "JSON Looks OK\n";
	}

