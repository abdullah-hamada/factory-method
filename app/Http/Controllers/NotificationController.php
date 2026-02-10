<?php

namespace App\Http\Controllers;

use App\Notifications\NotificationChannelFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function send(Request $request): JsonResponse
    {
        $type = $request->input('type', $request->query('type', 'email'));
        $message = $request->input('message', $request->query('message', 'this is a test message'));

        $channel = NotificationChannelFactory::getChannel($type);
        $channel->send($message);

        return response()->json([
            'sent' => true,
            'type' => $type,
            'message' => $message,
        ]);
    }
}
