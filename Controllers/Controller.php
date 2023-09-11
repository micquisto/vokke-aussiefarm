<?php

namespace Vokke\AussieFarm\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Vokke\AussieFarm\Models\Kangaroo\Tracker;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Tracker
     */
    protected Tracker $tracker;

    /**
     * @param Tracker $tracker
     */
    public function __construct(
        Tracker $tracker
    )
    {
        $this->tracker = $tracker;
    }

    /**
     * @param $result
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendResponse($result, $message) 
    {
        $response = [
            'success'   => true,
            'data'      => $result,
            'message'   => $message
        ];
        return response()->json($response,200);
    }

    /**
     * @param $error
     * @param $errorMessages
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success'   => false,
            'message'   => $error
        ];
        
        if(!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response,$code);
    }
}
