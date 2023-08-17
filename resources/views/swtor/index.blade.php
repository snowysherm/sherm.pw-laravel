@include('sections.head')
<title>SW:TOR NiM Prestige Table</title>
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
<form method="POST" action="{{ route('swtor.store') }}"> @csrf
    <p>
        <label>Create character in DB, name:</label>
        <input type="text" name="name" {{ old("name") }}/>
        <button type="submit" name="Submit">Create</button>
    </p>
</form>
@foreach($characters as $character)
    <a href=>{{ $character->name }}</a><br>
@endforeach
</body>

