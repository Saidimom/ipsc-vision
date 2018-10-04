@extends(env('THEME').'.layouts.basic')

@section('cssFiles')
    {!! $cssFiles or '' !!}
@endsection

@section('header')
    {!! $header or '' !!}
@endsection

@section('content')
    {!! $content or '' !!}
@endsection

@section('jsFiles')
    {!! $jsFiles or '' !!}
@endsection
