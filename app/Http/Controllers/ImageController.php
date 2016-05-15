<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Images;
use Log;

class ImageController extends Controller
{
    function insertImage($userId, $url)
    {
    	Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
		$image = new Images();
		$image->user_id = $userId;
		$image->url = $url;
		$result = $image->save();
		if(!$result){
			Log::error("Image url insertion failed.");
			return false;
		}
		return true;
    }
}
