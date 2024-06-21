<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets List</h1>
    <ul>
        @forelse ($planets as $planet)
            <li>
                <h2>{{ $planet['name'] }}</h2>
                <p>{{ $planet['description'] }}</p>
            </li>
        @empty
            <li>No planet found</li>
        @endforelse
    </ul>
</body>
</html>
