<!DOCTYPE HTML>
<head>
    <title>SW:TOR NiM Prestige Table</title>
    <link rel="stylesheet" href="/public/style.css">
</head>
<body>
<form method="POST" action="{{ route('swtor.store') }}"> {{ csrf_field() }}
    <p>
        <label>Create character in DB, name:</label>
        <input type="text" name="name" {{ old("name") }}/>
    </p>
    <p>
        <input type="submit" name="Submit"/>
    </p>
</form>
</body>

