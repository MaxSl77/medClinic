<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Orso Clinic</title>
        @extends('layouts.app')

        @section('title', 'Главная')

        @section('content')
            @include('partials.header')
            @include('partials.performance')
            @include('partials.services')
            @include('partials.equipments')
            @include('partials.doctors')
            @include('partials.promotion')
    @endsection
</html>
