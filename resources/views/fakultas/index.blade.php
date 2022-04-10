@include("layout.header")


<h1> Fakultas</h1>

<ol>
@foreach ($fakultas as $key => $value)

 <li>{{$value->nama}}</li>
 <br/>
 Email:{{$value->email}}<br/>
 kode:{{$value->kode}}<br/>

@endforeach
</ol>

@include("layout.footer")





