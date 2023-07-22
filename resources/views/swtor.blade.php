<!DOCTYPE HTML>
<head>
    <title>SW:TOR NiM Prestige Table</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('swtor.store') }}"> {{ csrf_field() }}
    <p>
        <label>Create character in DB, name:</label>
        <input type="text" name="name" {{ old("name") }}/><button type="submit" name="Submit">Create</button>
    </p>
</form>
</body>

