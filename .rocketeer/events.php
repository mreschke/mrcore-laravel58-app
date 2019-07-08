<?php
use Rocketeer\Facades\Rocketeer;

/*
Events in Order
---------------
deploy.before
create-release.before
create-release.after
dependencies.before
dependencies.after
test.before
test.after
migrate.before
migrate.after
deploy.before-symlink
deploy.after
*/

Rocketeer::addTaskListeners('deploy', 'before-symlink', function ($task) {
	dump("Running Task: artisan-view-clear");
	Rocketeer::execute('artisan-view-clear');
});

