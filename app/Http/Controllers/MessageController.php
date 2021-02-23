<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{
    public function store(MessageRequest $request)
    {
        Log::info('Success validation user -  ' . $request['name'] . ' ,email -' . $request['email']);
        //other actions
        
        return response()->json(['Success validation']);
    }
}
