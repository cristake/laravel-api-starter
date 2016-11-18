<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;  
use Dingo\Api\Exception\ResourceException;

class Controller extends BaseController
{
	protected function throwValidationException(\Illuminate\Http\Request $request, $validator)  
	{ 
	    throw new ResourceException('Validation failed', $validator->getMessageBag()); 
	}
}
