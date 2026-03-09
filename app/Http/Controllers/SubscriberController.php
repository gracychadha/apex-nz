<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Subscriber;
class SubscriberController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email|max:255'
        ]);

        // Check duplicate email
        $exists = Subscriber::where('email', $request->email)->first();

        if ($exists) {
            return response()->json([
                'status' => false,
                'message' => 'You are already subscribed.'
            ]);
        }

        // Save subscriber
        Subscriber::create([
            'email' => $request->email,
            'ip_address' => $request->ip()
        ]);

        return response()->json([
            'message' => 'Subscribed successfully!'
        ]);
    }
}
