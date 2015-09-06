<?php

class Tasks_globes extends Tasks {

	public function getThemeSettingsPath() {
		return Path::assemble(BASE_PATH, Config::getThemesPath(), Config::getTheme(), '/theme.yaml');
	}

	public function getThemeSettings() {
		$path = $this->getThemeSettingsPath();
		
		$yaml = YAML::parseFile($path);
		return $yaml;
	}
	
	public function getGlobals() {
		$all = $this->getThemeSettings();
		
		return ($all['globals']);
	}
	
	public function getGlobal($global) {
		$globals = $this->getGlobals();
		
		foreach ($globals as $g) {
			if ($g['name'] == $global) {
				return $g['value'];
			}
		}
		
		return null;
	}

}