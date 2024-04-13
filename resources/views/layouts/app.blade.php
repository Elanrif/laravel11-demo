@extends('welcome')

@section('main')
    <div id="app">
       
        <main style="min-height: 80vh;" class="text-black">
            @yield('content')
        </main>
    </div>
@endsection
    
