@extends('layout.master')

@section('content')

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label>Name:</label>
        <input name="name"/>

        <button>Save</button>
    </form>

@endsection