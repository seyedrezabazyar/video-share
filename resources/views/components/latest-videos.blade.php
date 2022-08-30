<h1 class="new-video-title" xmlns:x-videos-box="http://www.w3.org/1999/html"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
<div class="row">
    <!-- video-item -->
    @foreach($videos as $video)
        <x-video-box :video="$video" />
    @endforeach
</div>
