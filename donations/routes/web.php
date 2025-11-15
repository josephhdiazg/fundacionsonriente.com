<?php

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/', function (Request $request) {
    $donation = Donation::create($request->all());
    return response()->json(['message' => 'Donation created successfully', 'donation' => $donation]);
});
