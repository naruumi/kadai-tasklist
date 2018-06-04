@extends('layouts.app')

@section('content')

<h1>Task一覧</h1>

    @if (count($tasklists) > 0)
        <ul>
            @foreach ($tasklists as $tasklist)
                <li>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!} : {{ $tasklist->content }}{!! link_to_route('tasklists.create', '新規Taskの投稿') !!}
</li>
            @endforeach
        </ul>
    @endif
    
@endsection