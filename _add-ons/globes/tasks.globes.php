<?php

use Symfony\Component\Finder\Finder as Finder;

class Tasks_globes extends Tasks {

	public function getOverviewData() {
		
		$theme_settings = Config::getThemesPath() . '/' . Config::getTheme() . '/theme.yaml';
		
		$theme_yaml = File::get($theme_settings);
		
		$settings = YAML::parse($theme_yaml);

		return compact('theme_settings', 'theme_yaml', 'settings');
	}

}