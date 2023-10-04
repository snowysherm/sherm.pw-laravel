@include('sections.head')
</head>
<form method="POST" action="{{ route('clock.store') }}">
    @csrf
<label>Ziel Datum: </label>
<input type="date" name="date">
<label>Submit </label>
<input type="submit">
</form>

<br>

<h2>Noch {{ $diff }} Tage bis es so weit ist</h2>
