<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="{{ asset('styles/natanstyle.css') }}">
    <link rel="stylesheet" href="style.css">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
            <tr>
                <td>{{ $dataku['id']}}</td>
                <td>{{ $dataku['nama']}}</td>
                <td>{{ $dataku['harga']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, modi?</h1>
    <img src="{{ asset('images/cth1.png') }}" alt="cth1.png">
    <img src="{{ asset('images/cth2.jpg') }}" alt="cth2.jpg">
</html>