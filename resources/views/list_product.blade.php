@extends('layout.list')

@section ('title', 'ini adalah judul pada meta')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['produk']}}</td>
                <!--Data lainnya-->
            </tr>
        @endforeach
    </tbody>
</table>
@endsection