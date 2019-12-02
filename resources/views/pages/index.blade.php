@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is a laraverl application from Larave from scratch Youtube seris. Entrer</p>
    <p><a class="btn btn-primary btn-lg" role="button" href="/lsapp/public/login">Login</a>
        <a class="btn btn-success btn-lg" role="button" href="/lsapp/public/register">Register</a>
    </p>
</div>
@endsection
