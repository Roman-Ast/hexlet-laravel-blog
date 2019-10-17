@extends('layouts.app')

@section('title', 'О блоге')

@section('content')
    <h1>Статьи</h1>
    @foreach ($articles as $article)
    <table>
        <tr>
            <td>{{ $article['name'] }}</td>
            <td>{{ $article['body'] }}</td>
        </tr>
    </table>
    @endforeach
@endsection

