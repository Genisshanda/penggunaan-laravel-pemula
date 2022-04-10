@extends("layout.master")
@section('title')

Halaman Program Studi
@endsection

@section("content")

<h1> Program Studi</h1>

<ol>
@foreach ($program_studi as $key => $value)
            
 <li>{{$value}}</li>

@endforeach
</ol>
@endsection