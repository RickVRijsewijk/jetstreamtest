<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');
});

Route::resource('tasks', TaskController::class);

Route::get('/system-status', function () {
    $free = disk_free_space('/');
    $total = disk_total_space('/');
    $used = $total - $free;

    $usedFormatted = formatBytes($used);
    $totalFormatted = formatBytes($total);

    $queueCount = \Illuminate\Support\Facades\Queue::size('default');
    $version = trim(exec('git log --pretty="%h" -n1 HEAD'));

    return view('admin.system-status', compact(
        'usedFormatted',
        'totalFormatted',
        'queueCount',
        'version'
    ));
})->name('admin.status');