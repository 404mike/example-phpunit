<?php
namespace App;

class Greeter {
	public function greet(string $name = null):string {
		if($name) {
			return "Hello, $name!bv";
		}

		return "Hello!b";
	}
}
