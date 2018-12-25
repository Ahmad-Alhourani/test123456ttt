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

//start_Player_start
Breadcrumbs::register('admin.player.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.players.title'),
        route('admin.player.index')
    );
});

Breadcrumbs::register('admin.player.level', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.players.title'),
        route('admin.player.index')
    );
});

Breadcrumbs::register('admin.player.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.player.index');
    $breadcrumbs->push(
        __('labels.backend.players.create'),
        route('admin.player.create')
    );
});

Breadcrumbs::register('admin.player.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.player.index');
    $breadcrumbs->push(
        __('menus.backend.players.view'),
        route('admin.player.show', $id)
    );
});

Breadcrumbs::register('admin.player.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.player.index');
    $breadcrumbs->push(
        __('menus.backend.players.edit'),
        route('admin.player.edit', $id)
    );
});
//end_Player_end

//start_Box_start
Breadcrumbs::register('admin.box.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.boxes.title'),
        route('admin.box.index')
    );
});

Breadcrumbs::register('admin.box.level', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.boxes.title'),
        route('admin.box.index')
    );
});

Breadcrumbs::register('admin.box.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.box.index');
    $breadcrumbs->push(
        __('labels.backend.boxes.create'),
        route('admin.box.create')
    );
});

Breadcrumbs::register('admin.box.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.box.index');
    $breadcrumbs->push(
        __('menus.backend.boxes.view'),
        route('admin.box.show', $id)
    );
});

Breadcrumbs::register('admin.box.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.box.index');
    $breadcrumbs->push(
        __('menus.backend.boxes.edit'),
        route('admin.box.edit', $id)
    );
});
//end_Box_end

//start_Item_start
Breadcrumbs::register('admin.item.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.items.title'),
        route('admin.item.index')
    );
});

Breadcrumbs::register('admin.item.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.item.index');
    $breadcrumbs->push(
        __('labels.backend.items.create'),
        route('admin.item.create')
    );
});

Breadcrumbs::register('admin.item.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.item.index');
    $breadcrumbs->push(
        __('menus.backend.items.view'),
        route('admin.item.show', $id)
    );
});

Breadcrumbs::register('admin.item.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.item.index');
    $breadcrumbs->push(
        __('menus.backend.items.edit'),
        route('admin.item.edit', $id)
    );
});
//end_Item_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
