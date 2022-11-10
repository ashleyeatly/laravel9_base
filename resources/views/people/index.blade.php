@extends('layouts.master')

@section('title', 'People')

@section('content')
    <article>
        <ul>
            @foreach($people as $person)
                <li>
                    <a href="{{route('people.show',['person'=>$person])}}">{{$person->first_name}} {{$person->surname}} {{$person->address}}
                </li>
            @endforeach
        </ul>
    </article>

@endsection

