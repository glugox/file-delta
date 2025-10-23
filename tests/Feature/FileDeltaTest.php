<?php

use Glugox\FileDelta\Facades\FileDelta;

beforeEach(function () {
    $tmpPath = base_path('workbench/tmp');
    if (! is_dir($tmpPath)) {
        mkdir($tmpPath, 0777, true);
    }
});

afterEach(function () {
    $tmpPath = base_path('workbench/tmp');
    array_map('unlink', glob("$tmpPath/*.*"));
    rmdir($tmpPath);
});


it('can track file additions', function () {
    $path = base_path('workbench/tmp/test_add.txt');
    file_put_contents($path, 'initial');

    FileDelta::add($path);

    $changes = FileDelta::changes();
    expect($changes)
        ->toHaveKey('added')
        ->and($changes['added'])->toContain($path);
});

it('can track file edits', function () {
    $path = base_path('workbench/tmp/test_edit.txt');
    file_put_contents($path, 'initial');

    FileDelta::edit($path);

    $changes = FileDelta::changes();
    expect($changes)
        ->toHaveKey('edited')
        ->and($changes['edited'])->toContain($path);
});

it('can track file deletions', function () {
    $path = base_path('workbench/tmp/test_delete.txt');
    file_put_contents($path, 'delete me');

    FileDelta::delete($path);

    $changes = FileDelta::changes();
    expect($changes)
        ->toHaveKey('deleted')
        ->and($changes['deleted'])->toContain($path);
});

it('can revert changes', function () {
    $path = base_path('workbench/tmp/test_revert.txt');
    file_put_contents($path, 'initial');

    FileDelta::edit($path);
    FileDelta::revert($path);

    $changes = FileDelta::changes();
    expect($changes['edited'])->not()->toContain($path);
});
