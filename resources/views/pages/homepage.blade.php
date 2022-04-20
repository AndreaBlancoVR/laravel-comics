
@extends('layouts.standard')

@section('metaTitle', 'laravel-comics HOME')

@section('mainContent')
    <ul>
        @foreach($comics as $el)
            <li>
            {{ $el['title'] }}
            </li>
        @endforeach   
    </ul>
@endsection