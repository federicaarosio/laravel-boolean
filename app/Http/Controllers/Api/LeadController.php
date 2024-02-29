<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(request $request) {
        $newLead = new Lead();
        $newLead = Lead::create($request->all());

        Mail::to("admin@boolpress.com")->send(new NewContact($newLead));

        return response()->json([
            'success' => true,
        ]);
    }
}
