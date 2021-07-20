@extends("layouts.index")

@section("content")
    <ul>
    @foreach ($tabs as $tab)
            <li>{{ $tab }}</li>
        @endforeach
    </ul>
@endsection
