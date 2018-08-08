@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <table>
    @foreach($data as $item)
    <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2007 tuyano.
@endsection