@foreach($videos as $video)
    <li>{{$video}}</li>
@endforeach

@if($is_admin)
    <h1>ADMIN</h1>
@endif
