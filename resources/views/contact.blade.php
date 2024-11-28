{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h2>Nama: {{$name}}</h2>
    <h2>Kelas: {{$class}}</h2>
    <h2>LinkeIn: <a href="{{$linkedin}}">Connect dengan saya!</a></h2>
</body>
</html> --}}

<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <h3>Halaman Contact</h3>
    <h2>Nama: {{$name}}</h2>
    <h2>Kelas: {{$class}}</h2>
    <h2>LinkeIn: <a href="{{$linkedin}}">Connect dengan saya!</a></h2>
</x-layout>
