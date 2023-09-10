<?php
use Vokke\AussieFarm\Controllers\Kangaroo\TrackerController;
/**
 * Kangaroo tracker routes
 */
Route::post('/tracker/view', [TrackerController::class, 'process']);//->middleware('api-middleware');