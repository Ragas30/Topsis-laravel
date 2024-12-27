@extends('layout.header')
@section('title', 'Home')
@section('content')

    <main class="flex flex-row items-center justify-center h-screen bg-gradient-to-r from-violet-500 to-violet-900">
        <div class="grid grid-cols-1 justify-start md:grid-cols-2 gap-4 md:gap-8 lg:gap-12 p-4 md:p-0">
            <div class="flex flex-col items-start justify-center text-white">
                <h1 class="text-6xl font-bold">Welcome to Topsis</h1>
                <h2 class="text-4xl font-bold">Sistem Pendukung Keputusan</h2>
                <p class="mt-2 md:mt-6">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur, architecto!
                    Quos
                    voluptatum autem, tempora harum repellendus delectus magnam, veniam commodi vel assumenda, doloribus
                    unde
                    ad.
                </p>
                <a href="{{ route('login') }}"
                    class="mt-6 md:mt-12 px-6 py-2 rounded-md bg-white text-black hover:bg-gray-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">
                    Login
                </a>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <img src="{{ asset('img/logo.png') }}" alt="asu" class="w-1/2 md:w-3/4 lg:w-1/2">
            </div>
    </main>

@endsection
