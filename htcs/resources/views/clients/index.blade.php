@extends('clients.layout')
@section('content')
@include('flash_message')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card" style = "height: 50vw; width:70vw; padding: 10px; margin-top: 20px;">
                    <div class="card-header">
                        <h2  style="text-align: center; text-decoration: none; text-transform: uppercase; color: #AC6025; font-size: 40px;">Appointments</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/client/create') }}" class="btn btn-success btn-sm" title="Add New Appointment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a href="/show" style="text-decoration: none; text-transform: uppercase; color: #04AA6D; font-weight: bold; font-size: 20px; margin-left: 700px;">Logout</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>
                                            <a href="{{ url('/client/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/client/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('client/' .$item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
@endsection