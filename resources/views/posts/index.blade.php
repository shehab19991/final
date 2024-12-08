@extends('layout.master')

@section('content')

<a href="{{ route('posts.create') }}">Create New</a>

<table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->name }}</td>
                    <td><a href="{{ route('posts.edit', ['post'=>$post->id]) }}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection