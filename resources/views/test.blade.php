
@extends("layouts.layout")


@section("content")
<div class="flex-center position-ref full-height">
    <div class="content">
<h1> life without programming is booooooringggggg brah</h1>
@foreach($key as $family)
<p>{{$family['name']}}------{{$family['major']}}</p>

@endforeach

</div>

</div>
@endsection