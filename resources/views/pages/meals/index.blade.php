@extends('layouts.app')
@section('title')
Nos Menus -
@endsection
@section('description')
Commandez votre menu préféré
@endsection
@section('content')
@include('includes.hero-meals' )
<main id="main" v-cloak>
    <meals-index />
</main>


@endsection
