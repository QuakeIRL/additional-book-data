<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/author', function (Request $request) {
    return [
        'fullname' => 'Matt Dinniman',
        'websites' => 'https://mattdinniman.com',
        'note' => 'Matt Dinniman rocks'
    ];
})->middleware('auth:sanctum');

Route::get('/author/works', function (Request $request) {
    return [
        'collected-works' => [
            [
                'title' => 'Dungeon Crawler Carl',
                'pages' => '464',
                'publisher' => 'Penguin Publishing Group',
                'published' => '2024-08-07',
                'format' => 'hardcover',
            ],
            [
                'title' => 'Carl\'s Doomsday Scenario',
                'pages' => '384',
                'publisher' => 'Penguin Publishing Group',
                'published' => '2024-09-24',
                'format' => 'hardcover',
            ],
            [
                'title' => 'Dungeon Anarchist\'s Cookbook',
                'pages' => '544',
                'publisher' => 'Penguin Publishing Group',
                'published' => '2024-10-22',
                'format' => 'hardcover',
            ],
            [
                'title' => 'Dominion of Blades',
                'pages' => '438',
                'publisher' => 'CreateSpace Independent Publishing Platform',
                'published' => '2017-03-21',
                'format' => 'paperback',
            ],
        ]
    ];
})->middleware('auth:sanctum');

Route::get('/book', function (Request $request) {
    return [
        'title' => 'Dungeon Crawler Carl',
        'pages' => '464',
        'publisher' => 'Penguin Publishing Group',
        'published' => '2024-08-07',
        'format' => 'hardcover',
    ];
})->middleware('auth:sanctum');
