<?php

use Illuminate\Support\Facades\Route;

Route::get('dump', function () {
    return response()->json([
        'message' => 'This is a dump route from the package'
    ]);
});

Route::get('dump/data', function () {
    return response()->json([
        'data' => [1, 2, 3]]
    );
});
