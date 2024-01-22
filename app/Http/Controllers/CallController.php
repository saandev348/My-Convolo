<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class CallController extends Controller
{
function index(Request $req){
  $validatedData = $req->validate([
    'call_num' => 'required',
    'cust_email' => 'required|email',
    // Add other validation rules as needed
]);

// Create a new Client record
$client = Client::create([
    'phone_num' => $validatedData['call_num'],
    'cust_email' => $validatedData['cust_email'],
    // 'status' will get its default value as specified in the model
]);
return redirect('/');
}
}
