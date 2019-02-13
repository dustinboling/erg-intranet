<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Folders
Breadcrumbs::for('folders', function ($trail) {
    $trail->parent('home');
    $trail->push('All Resources', route('folders.index'));
    $trail->push($folder->name);
});

// Home > Folders
Breadcrumbs::for('folder', function ($trail, $folder) {
    $trail->parent('home');
    $trail->push('All Resources', route('folders.index'));
    $trail->push($folder->name);
});