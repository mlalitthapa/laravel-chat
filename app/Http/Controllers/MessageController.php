<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Message;
use App\Events\MessagePosted;

class MessageController extends Controller
{
    
    /**
     * Get the list of messages
     */
	function getMessages() {

		return Message::with('user')->get();

	}

	/**
	 * Post new message
	 */
	function postMessage() {

		$user = Auth::user();

		$message = $user->messages()->create([
				'message' => request()->get('message')
			]);

		// event(new MessagePosted($message, $user));

		broadcast(new MessagePosted($message, $user))->toOthers();

		return response()->make([], 200);

	}

}
