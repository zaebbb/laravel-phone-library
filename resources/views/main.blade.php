@extends('layout')


@section('dynamicSection')
<form action="search" method="get">
<div class="search">
    <input type="text" placeholder="Поиск..." id="search" name="search">
    <button type="submit">Найти</button>
</div>
</form>


<ul>
    <li>
        <p class="number"><b>#</b></p>
        <p class="name"><b>Name</b></p>
        <p class="email"><b>Email</b></p>
        <p class="phone"><b>Phone</b></p>
    </li>
    @foreach($users as $user)
    <li>
        <p class="number"><b>{{ $user->id }}</b></p>
        <p class="name">{{ $user->name }}</p>
        <p class="email">{{ $user->email }}</p>
        <p class="phone">{{ $user->phone }}</p>
    </li>
    @endforeach
</ul>

{{ $users->appends(['search' => request()->search])->links() }}

@endsection