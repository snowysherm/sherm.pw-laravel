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

@foreach($datesWithDiffInDays as $day)
    <h2>Noch {{ $day }} Tage</h2>
@endforeach
