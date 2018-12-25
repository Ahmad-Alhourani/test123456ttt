<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(
        __('strings.backend.dashboard.title'),
        route('admin.dashboard')
    );
});

//start_Level_start
Breadcrumbs::register('admin.level.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.levels.title'),
        route('admin.level.index')
    );
});

Breadcrumbs::register('admin.level.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.level.index');
    $breadcrumbs->push(
        __('labels.backend.levels.create'),
        route('admin.level.create')
    );
});

Breadcrumbs::register('admin.level.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.level.index');
    $breadcrumbs->push(
        __('menus.backend.levels.view'),
        route('admin.level.show', $id)
    );
});

Breadcrumbs::register('admin.level.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.level.index');
    $breadcrumbs->push(
        __('menus.backend.levels.edit'),
        route('admin.level.edit', $id)
    );
});
//end_Level_end

//start_Gem_start
Breadcrumbs::register('admin.gem.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.gems.title'),
        route('admin.gem.index')
    );
});

Breadcrumbs::register('admin.gem.level', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.gems.title'),
        route('admin.gem.index')
    );
});

Breadcrumbs::register('admin.gem.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.gem.index');
    $breadcrumbs->push(
        __('labels.backend.gems.create'),
        route('admin.gem.create')
    );
});

Breadcrumbs::register('admin.gem.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.gem.index');
    $breadcrumbs->push(
        __('menus.backend.gems.view'),
        route('admin.gem.show', $id)
    );
});

Breadcrumbs::register('admin.gem.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.gem.index');
    $breadcrumbs->push(
        __('menus.backend.gems.edit'),
        route('admin.gem.edit', $id)
    );
});
//end_Gem_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
