<div id="related-posts">

    @foreach($videos as $video)
        <!-- video item -->
        <div class="related-video-item">
            <div class="thumb">
                <small class="time">{{$video->lengthInHuman}}</small>
                <a href="{{route('videos.show', $video->slug)}}"><img src="{{$video->thumbnail}}" alt=""></a>
            </div>
            <a href="{{route('videos.show', $video->slug)}}" class="title">{{$video->name}}</a>
            <a class="channel-name" href="#">داود طاهری<span>
                                    <i class="fa fa-check-circle"></i></span></a>
        </div>
        <!-- // video item -->
    @endforeach

</div>
