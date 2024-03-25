@extends('thrift::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('thrift.name') !!}</p>
@endsection
