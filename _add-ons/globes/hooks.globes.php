<?php

use Respect\Validation\Validator as v;

class Hooks_globes extends Hooks {

	public function control_panel__add_routes(){
		$app = \Slim\Slim::getInstance();
		$tasks = $this->tasks;

		$app->get('/globes', function() use ($app, $tasks) {
			authenticateForRole('admin');
			doStatamicVersionCheck($app);

			$template_list = array("globes-overview");
			Statamic_View::set_templates(array_reverse($template_list), __DIR__ . '/templates');

			$data = $tasks->getOverviewData();

			$app->render(null, array('route' => 'globes', 'app' => $app) + $data);

		})->name('globes');
		
		
		// Update global vars
		$app->post('/globes/update', function() use ($app, $tasks) {
			authenticateForRole('admin');
			doStatamicVersionCheck($app);
			
			$action = Request::fetch('action');
			
			$vars = (array) Request::fetch('vars');
			$data = $tasks->getOverviewData();
			
			$yamlContents = file($data['theme_settings']);

			foreach($vars as $key => $var) {
				
				$linesFound = preg_grep($key, $yamlContents);
				$yamlContents[key($linesFound)] =  '  ' . substr($key,1,-1) . ': ' . $var . "\n";
				
			}
			
			file_put_contents($data['theme_settings'], implode($yamlContents));

			$app->flash('success', Localization::fetch('update_success'));

			$app->redirect($app->urlFor('globes'));
		});
	
	}

}