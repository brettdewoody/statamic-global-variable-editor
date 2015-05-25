<?php

class Hooks_globes extends Hooks {

	public function control_panel__add_routes(){
		$app = \Slim\Slim::getInstance();

		$app->get('/globes', function() use ($app) {
			authenticateForRole('admin');
			doStatamicVersionCheck($app);

			Statamic_View::set_templates(array("globes-overview"), __DIR__ . '/templates');

			$data = $this->tasks->getThemeSettings();

			$app->render(null, array('route' => 'globes', 'app' => $app) + $data);

		})->name('globes');
		
		
		// Update global vars
		$app->post('/globes/update', function() use ($app) {
			authenticateForRole('admin');
			doStatamicVersionCheck($app);

			$data = $this->tasks->getThemeSettings();
			$vars = Request::fetch('vars');
			
			$data['globals'] = array_merge($data['globals'], Request::fetch('vars'));
			
			File::put($this->tasks->getThemeSettingsPath(), YAML::dump($data));

			$app->flash('success', Localization::fetch('update_success'));

			$app->redirect($app->urlFor('globes'));
		});
	
	}

}