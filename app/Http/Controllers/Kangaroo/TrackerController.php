<?php
namespace App\Http\Controllers\Kangaroo;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


/**
 * [Description TrackerController]
 */
class TrackerController extends Controller
{


    public function process(Request $request)
    {
        $x = ["a","b"];
        $y = 1;
        return view('aussiefarm::index', compact("x","y"));
    }
}
