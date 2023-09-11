<?php
//use App\Controllers\Kangaroo\TrackerController;
/**
 * Kangaroo tracker routes
 */
//Route::get('/tracker/view', [TrackerController::class, 'process']);//->middleware('vokke-middleware');

Route::get('tracker/view', 'Kangaroo\TrackerController@process')->name('trackerProcess');
