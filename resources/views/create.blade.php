@extends('layouts.app')
{{--SET WINDOW TITLE--}}
@section('title','Home Page | Free Store')

@section('content')
    <form action="{{route('form.store')}}" method="post">
        @csrf
        <label for="title">
            Username:
            <input type="text" name="title" pattern="*[a-z]$" placeholder="Enter nikname.." />
        </label>
        <button type="submit">Send Data</button>
        @if(count($errors)>0)
            {{$errors}}
        @endif
    </form>
@endsection
