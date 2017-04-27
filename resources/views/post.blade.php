
@extends('layouts.master')

@section('content')
    
    <ul>
    <li>CATEGORY: {{$category}}</li>

    <li>DATE: {{$date}}</li>

    <li>POST ID: {{$id}}</li>

    </ul>


@endsection('content')



@section('footer')

<script>

    console.log('{{$category}} {{$date}} {{$id}}')

</script>

@endsection('footer')