<?php
/**
 * Plugin Name: Chambrax
 * Description: Chambrax plugin
 * Version: 1.0
 * Author: Romain Leblond
 **/

use Chambrax\PostType;

require_once 'inc/PostType.php';

class Chambrax {
	public function init(): void {
		(new PostType())->register();
	}
}

(new Chambrax())->init();