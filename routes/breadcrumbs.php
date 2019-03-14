<?php
// Home
// Don't remove, this Breadcrumb route is used by the routes below
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Folders.index
Breadcrumbs::for('folders', function ($trail) {
    $trail->parent('home'); // references Breadcrumb route above
    $trail->push('All Resources', route('folders.index'));
});

// Home > Folders.index > Folder.show
Breadcrumbs::for('folder', function ($trail, $folder) {
    $trail->parent('folders'); // references Breadcrumb route above

    // Collect this Folder's ancestors
    $parentFolders = collect();
    $parentFolder = $folder->folder;
    while( $parentFolder )
    {
        $parentFolders->prepend($parentFolder);
        $parentFolder = $parentFolder->folder;
    }

    // Build the trail back to the top Folder
    foreach ($parentFolders as $f) {
        $trail->push($f->name, route('folders.show', $f->id));
    }

    $trail->push($folder->name);
});

// Home > Users.index
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('home'); // references Breadcrumb route above
    $trail->push('Company Directory', route('users.index'));
});

// Home > Calendars.index
Breadcrumbs::for('calendars', function ($trail) {
    $trail->parent('home'); // references Breadcrumb route above
    $trail->push('All Calendars', route('calendars.index'));
});

// Home > Calendars.index > Calendar.show
Breadcrumbs::for('calendar', function ($trail, $calendar) {
    $trail->parent('calendars'); // references Breadcrumb route above
    $trail->push($calendar->name);
});
