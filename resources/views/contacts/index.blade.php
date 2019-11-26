@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CRUD</div>

                <div class="card-body">
                   <table class="table table-striped">
                       <thead>
                           <tr>
                               <th>Name</th>
                               <th>Phone</th>
                               <th>Message</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->message}}</td>
                                <td>
                                    <a href="{{route('contacts.edit', [$contact->id])}}" class="btn btn-sm btn-outline-warning">Edit</a>
                                    <a href="{{route('contacts.destroy', [$contact->id])}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                           @endforeach
                       </tbody>
                       <tfoot>
                           <tr>
                               <td colspan="4"><a href="{{ route('contacts.create') }}" class="btn btn-sm btn-outline-primary">Add New</a></td>
                           </tr>
                       </tfoot>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
