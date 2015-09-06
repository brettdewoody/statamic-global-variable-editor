<?php

class Plugin_globes extends Plugin {

	public function get() {
		$name = $this->fetchParam("name");
		
		return ($this->tasks->getGlobal($name));
	}

}