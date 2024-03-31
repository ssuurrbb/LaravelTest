@extends('layouts.app')

@section('title')
 Forma
@endsection



@section('content')

<h1>Form</h1>


@include('message')



<form method="post" action="{{route('form-nam')}}"> 
    @csrf <!-- Ключ безопасности -->

    <div class="form-group">
        <div>
            <label for="name">Name: </label>
            <input type="text" class="form-control" id="name" name="name" placholder="Enter name">
        </div>
    </div>
    <div class="form-group">
        <div>
            <label for="email">Email: </label>
            <input type="text" class="form-control" id="email" name="email" placholder="Enter email">
        </div>
    </div>
    <div class="form-group">
        <div>
            <label for="phone">Phone: </label>
            <input type="number"  class="form-control" id="phone" name="phone" placholder="Enter you phone">
        </div>
    </div>
    <input class="btn btn-primary mb-3" type="submit" name="btn" value="Send">
</form>
@endsection