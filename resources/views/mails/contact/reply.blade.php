@extends('layouts.mails.app')

@section('content')
<div class="v-text-align v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
    <p>Hello, {{ $message->name }}</p>
    {{ $message->reply }}
  </div>
@endsection