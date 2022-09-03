@extends('layout')

@section('content')
    <div id="upload">
        <div class="row">
            <x-validation-errors></x-validation-errors>
            <!-- upload -->
            <div class="col-md-8">
                <h1 class="page-title"><span>@lang('videos.upload')</span> @lang('videos.film')</h1>
                <form action="{{route('videos.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>@lang('videos.name')</label>
                            <input name="name" type="text" class="form-control" value="{{old('name')}}"
                                   placeholder="@lang('videos.name')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.length')</label>
                            <input type="text" name="length" class="form-control" value="{{old('length')}}"
                                   placeholder="@lang('videos.length')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.slug')</label>
                            <input type="text" name="slug" class="form-control" value="{{old('slug')}}"
                                   placeholder="@lang('videos.slug')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.url')</label>
                            <input type="text" name="url" class="form-control" value="{{old('url')}}"
                                   placeholder="@lang('videos.url')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.thumbnail')</label>
                            <input type="text" name="thumbnail" class="form-control" value="{{old('thumbnail')}}"
                                   placeholder="@lang('videos.thumbnail')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.categories')</label>
                            <select class="form-control" name="category_id" id="category">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>@lang('videos.description')</label>
                            <textarea class="form-control" name="description" rows="4"
                                      placeholder="@lang('videos.description')">{{old('description')}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" id="contact_submit" class="btn btn-dm">@lang('videos.save')</button>
                        </div>
                    </div>
                </form>
            </div><!-- // col-md-8 -->

            <div class="col-md-4">
                <a href="#"><img src="{{asset('img/upload-adv.png')}}" alt=""></a>
            </div><!-- // col-md-8 -->
            <!-- // upload -->
        </div><!-- // row -->
    </div><!-- // upload -->
@endsection
