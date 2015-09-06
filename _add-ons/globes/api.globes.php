<?php

class API_globes extends API {

	public function get($var) {
		return ($this->tasks->getGlobal($var));
	}

	public function getGlobals() {
		return ($this->tasks->getGlobals());
	}
}