@extends('layouts.app')

@section('title')
 Forma
@endsection



@section('content')

<h1>Admin page</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
    @foreach($data as $el)
  <tbody>
    <tr>
      <th>{{$el->id}}</th>
      <td>{{$el->name}}</td>
      <td>{{$el->email}}</td>
      <td>{{$el->phone}}</td>
    </tr>

    @endforeach
    </tbody>
    </table>
@endsection