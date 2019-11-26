@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update CRUD</div>

                <div class="card-body">
                    <form action="{{route('contacts.update', [$contact->id])}}" method="post">
                    	@csrf
                    	<div class="form-group">
                    		<label for="name">Name</label>
                    		<input value="{{$contact->name}}" class="form-control" name="name" id="name" type="text">
                    	</div>
                    	<div class="form-group">
                    		<label for="phone">Phone</label>
                    		<input value="{{$contact->phone}}" class="form-control" name="phone" id="phone" type="text">
                    	</div>
                    	<div class="form-group">
                    		<label for="message">Message</label>
                    		<textarea class="form-control" name="message" id="message" cols="30" rows="10">{{$contact->message}}</textarea>
                    	</div>
                    	<div class="form-group">
                    		<button class="btn btn-wraning" type="submit">Update</button>
                    	</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
