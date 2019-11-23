@extends('layouts.app')
@section('content')
    <div class="columns">
        <div class="column">
            <div class="content">
                <h4>@lang('thread.title')</h4>
                <ol>
                    @foreach($threads as $thread)
                        <li>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <h5>{{$thread->title}}</h5>
                                        <hr>
                                        <p>{{$thread->content}}</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
