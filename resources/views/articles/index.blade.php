@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>글 목록</h1>
        <hr/>
        <ul>
            @forelse ($articles as $article)
                <li>
                    {{ $article->title }}
                    <small>
                        by {{ $article->user->name }}
                    </small>
                </li>
            @empty
               <p>글이 없습니다</p>
            @endforelse
        </ul>
    </div>

    @if ($article->count())
        <div class="text-center">
            {!! $articles->render() !!}
        </div>
    @endif
   
@endsection