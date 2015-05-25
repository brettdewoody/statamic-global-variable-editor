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

}