<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Tags;
use Log;

class TagsController extends Controller
{
    function insertTag($userId, $tagValue)
    {
    	Log::info(__CLASS__.'::'.__FUNCTION__.'() ==>');
    	$tagArray = explode(", ", $tagValue);
    	foreach ($tagArray as $key => $value) {
			$tags = new Tags();
			$tags->user_id = $userId;
			$tags->name = $value;
			$result = $tags->save();
			if(!$result){
				Log::error("Tag insertion failed.");
				return false;
			}
    	}
    	return true;
    }
}
