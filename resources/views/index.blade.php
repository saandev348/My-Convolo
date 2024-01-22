<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('title', 'Welcome to My Convolo App')

@section('content')
<div class="saan-display">
   <div class="container">
      <form action="{{ url('index') }}" method="post">
         @csrf
         <div class="mb-3">
            <label for="call-num" class="form-label">Enter Your Number</label>
            <input type="text" class="form-control" name="call_num" id="call-num" pattern="[0-9]{11}" title="Please enter phone number" required>
         </div>
         <div class="mb-3">
            <label for="cust_email" class="form-label">Enter Your Email</label>
            <input type="email" class="form-control" name="cust_email" id="cust-email" required>
         </div>
         <button class="btn btn-primary" type="submit">Submit</button>
      </form>
   </div>
</div>
@endsection
