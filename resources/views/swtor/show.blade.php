@include('sections.head')
</head>


<div>
    {{ $character->name }}
</div>

<form method="POST" action="{{ route('swtor.char.update', $character->id) }}"> @csrf
    <div>
        <label>
            <a>Wings of the Architect</a>
            <input type="checkbox" value="brontes_wings">
        </label>
    </div>


    <div>
        <label>
            <input type="submit">
        </label>
    </div>
</form>
