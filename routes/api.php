<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeController;


Route::post('/validate-youtube-links', [YoutubeController::class, 'validateYoutubeLinks']);
