<?php

class API_globes extends API {

	public function get($var) {
		$data = $this->tasks->getOverviewData();
		
		return ($data[$var]);
	}

	public function getAllThemeData($var) {
		return ($this->tasks->getOverviewData());
	}
}