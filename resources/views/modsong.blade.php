@extends('layout')

@section('content')
    <article style="background-image: url('https://wallpaperaccess.com/full/1373265.png');
    height: 1000px;">
        <div class="m-2 w-50 position-absolute top-50 start-50 translate-middle bg-dark p-5">
            <span class="text-light text-center align-content-center display-6">Edita una canción</span>
            <form method="POST" action="{{ route('modsong'), $list}}">
                @csrf
                <div class="form-floating mb-3 w-75">
                    <input name="song" type="comment" class="form-control" id="floatingPassword" placeholder="NameSong" value="{{ $list->song }}">
                    <label for="floatingPassword">@lang('Song Name')</label>
                    {!! $errors->first('song','<small class="text-light">:message</small><br>') !!}
                </div>
                <div class="form-floating mb-3 w-50">
                    <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Name" value="{{ old('name')}}">
                    <label for="floatingInput">@lang('Name of group/artist')</label>
                    {!! $errors->first('name','<small class="text-light">:message</small><br>') !!}
                </div>
                <div class="form-floating mb-3 w-75">
                    <input name="link" type="url" class="form-control" id="floatingPassword" placeholder="LinkSong" value="{{ old('link')}}">
                    <label for="floatingPassword">@lang('Song URL')</label>
                    {!! $errors->first('link','<small class="text-light">:message</small><br>') !!}
                </div>
                <button type="submit" class="btn btn-success mt-3">@lang('Add')</button>
            </form>
        </div>    
    </article>
@endsection