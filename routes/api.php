<?php
use Vokke\AussieFarm\Controllers\Kangaroo\TrackerController;
/**
 * Kangaroo tracker routes
 */
Route::get('/tracker/view', [TrackerController::class, 'process']);//->middleware('vokke-middleware');
