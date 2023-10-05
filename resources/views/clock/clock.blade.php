@include('sections.head')
</head>
<form method="POST" action="{{ route('clock.store') }}">
    @csrf
    <label>Ziel Datum: </label>
    <input type="date" name="date">
    <label>Name: </label>
    <input type="text" name="name">
    <input type="submit">
</form>

<br>

<h2>Noch {{ $diff }} Tage bis es so weit ist</h2>
