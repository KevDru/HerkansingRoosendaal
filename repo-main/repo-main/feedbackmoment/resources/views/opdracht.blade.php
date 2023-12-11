<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
 
    <title>Feedbackmoment</title>
</head>
<body>
    <h1>{{ $name }}</h1>
 
<table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Oorsprong</th>
            <th>Voorraad</th>
            <th>Prijs</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fruits as $fruit)
        <tr>
            <td>{{ $fruit->name }}</td>
            <td>{{ $fruit->origin }}</td>
            <td>{{ $fruit->stock }}</td>
            <td>{{ $fruit->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
