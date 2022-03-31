<?php

namespace App\Http\Controllers;

use App\Models\NewsSubscriber;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function verify(Request $request, $token)
    {
        $s = NewsSubscriber::where('token', $token)->get();
        if (count($s) > 0) {
            $s[0]->verified_at = Carbon::now();
            $s[0]->save();
        }
        return view("pages.newsletter.verifying-email", ['email' => $s[0]->email]);
    }
}
