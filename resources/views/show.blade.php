@extends('layouts.app')
@section('content')

    <div class="container text-center">
        <h1>{{ $project -> name }}</h1>
        <img src="http://picsum.photos/350/350" alt="">
        <div class="row align-items-center py-4">
            <span class="col">
               <u><i>Description:</i></u> {{$project -> description}}
            </span>
            <span class="col">
               <u><i>Difficulty:</i></u> <strong>{{$project -> difficulty}}</strong>
            </span>
            <span class="col">
                <u><i>Type:</i></u> <strong>{{$project -> type -> name}}</strong>
             </span>
            <span class="col">
               <u><i>Start date:</i></u> {{$project -> start_date}} <br>
               <u><i>End date:</i></u> {{$project -> end_date}}
            </span>
        </div>
    </div>

@endsection
