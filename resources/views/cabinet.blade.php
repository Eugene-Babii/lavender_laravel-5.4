@extends('layouts.layout')

@section('content')
<h1>Кабинет пользователя</h1>
<ul>
    @foreach ($rents as $rent)
        <li>{{ $rent->date}}</li>
    @endforeach
</ul>
@endsection