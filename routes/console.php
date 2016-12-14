<?php

Artisan::command('generate:model {name} {folder} {template}', function () {

    $tableName = $this->argument('name');
    $folder    = $this->argument('folder');
    $template  = $this->argument('template');

    $model = ucfirst(str_singular($tableName));

    // Model
    $source = 'initials/model.php';
    $dest   = 'app/' . $model . '.php';

    File::copy($source, $dest);

    $file_contents = file_get_contents($dest);
    $file_contents = str_replace("__model__", $model, $file_contents);
    $file_contents = str_replace("__tablename__", $tableName, $file_contents);
    file_put_contents($dest, $file_contents);

    // Controller
    $source = 'initials/controller.php';
    $dest   = 'app/Http/Controllers/' . $model . 'Controller.php';

    File::copy($source, $dest);

    $file_contents = file_get_contents($dest);
    $file_contents = str_replace("__model__", $model, $file_contents);
    $file_contents = str_replace("__template__", $template, $file_contents);
    $file_contents = str_replace("__folder__", $folder, $file_contents);
    file_put_contents($dest, $file_contents);

    // Route
    $source = 'initials/route.php';
    $dest   = 'routes/webRoutes/' . $model . 'Route.php';

    if (!File::isDirectory('routes/webRoutes/')) {
        File::makeDirectory('routes/webRoutes/');
    }

    File::copy($source, $dest);

    $file_contents = file_get_contents($dest);
    $file_contents = str_replace("__model__", $model, $file_contents);
    $file_contents = str_replace("__tablename__", $tableName, $file_contents);
    file_put_contents($dest, $file_contents);

    // Request (storeXxxx)
    $source = 'initials/request.php';
    $dest   = 'app/Http/Requests/store' . $model . '.php';

    if (!File::isDirectory('app/Http/Requests/')) {
        File::makeDirectory('app/Http/Requests/');
    }

    File::copy($source, $dest);

    $file_contents = file_get_contents($dest);
    $file_contents = str_replace("__model__", $model, $file_contents);
    file_put_contents($dest, $file_contents);

    // Index dans resources/views

    if (!File::isDirectory('resources/views/' . $folder)) {
        File::makeDirectory('resources/views/' . $folder);
    }

    if (!File::isDirectory('resources/views/' . $folder . '/' . $tableName)) {
        File::makeDirectory('resources/views/' . $folder . '/' . $tableName);
    }

    $source = 'initials/index.blade.php';
    $dest   = 'resources/views/' . $folder . '/' . $tableName . '/index.blade.php';

    File::copy($source, $dest);

    $file_contents = file_get_contents($dest);
    $file_contents = str_replace("__model__", $model, $file_contents);
    $file_contents = str_replace("__tablename__", $tableName, $file_contents);
    $file_contents = str_replace("__template__", $template, $file_contents);
    file_put_contents($dest, $file_contents);

    // Form dans resources/views/partials/forms

    if (!File::isDirectory('resources/views/partials')) {
        File::makeDirectory('resources/views/partials');
    }

    if (!File::isDirectory('resources/views/partials/forms')) {
        File::makeDirectory('resources/views/partials/forms');
    }

    $source = 'initials/form.blade.php';
    $dest   = 'resources/views/partials/forms/' . str_singular($tableName) . '.blade.php';

    File::copy($source, $dest);

})->describe('Generate a special model');
