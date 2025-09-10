<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/db-check', function () {
    try {
        $dbName = DB::connection()->getDatabaseName();
        return response()->json([
            "status" => "ok",
            "database" => $dbName,
            "host" => config('database.connections.mysql.host'),
            "user" => config('database.connections.mysql.username'),
            "time" => now()->toDateTimeString()
        ]);
    } catch (\Exception $e) {
        return response()->json([
            "status" => "error",
            "message" => $e->getMessage()
        ]);
    }
});
