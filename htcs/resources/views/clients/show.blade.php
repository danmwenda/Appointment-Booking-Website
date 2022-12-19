@extends('clients.layout')
@section('content')
<div class="card" style = "margin-top: 20px; background: #DBE9E0;">
  <div class="card-header" style="text-align: center; text-decoration: none; text-transform: uppercase; color: #AC6025; font-size: 40px;">Client Details</div>
  <div class="card-body" style="font-size: 25px; margin-left: 20px;">
        <h5 class="card-title" style="font-size: 25px;">Name : {{ $clients->name }}</h5>
        <p class="card-text">Email Address : {{ $clients->email }}</p>
        <p class="card-text">Phone Number : {{ $clients->phone }}</p>
        <p class="card-text">Date: {{ $clients->date }}</p>
  </div>
  <a href="/client" style="font-size: 25px; margin-left: 20px;">Go Back</a>
      
    </hr>
  
  </div>
</div>
@stop