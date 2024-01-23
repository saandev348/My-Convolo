<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class CallController extends Controller
{
  function main()
  {
    return view('index');
  }
  function call(Request $req)
  {
    $validatedData = $req->validate([
      'call_num' => 'required|regex:/^[0-9]{10,12}$/',
      'cust_email' => 'required|email',
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
