<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ResponseController extends Controller
{
    static function success($code, $data, $message){
    	$response['meta']['code'] = $code;
    	$response['meta']['request_id'] = '';
    	$response['response'] = $data;
    	$response['message'] = $message;
    	echo json_encode($response);
    }

    static function error($code, $data, $message){
    	$response['meta']['code'] = $code;
    	$response['meta']['request_id'] = '';
    	$response['response'] = $data;
    	$response['message'] = $message;
    	echo json_encode($response);
    }
}
