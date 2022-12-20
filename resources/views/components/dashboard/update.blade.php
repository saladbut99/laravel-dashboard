@extends('layouts')

@php
    $name = 'John Doe';
    $status = [
        'DELIVERED',
        'PENDING',
        'HOLD',
    ];
@endphp

       

    {{-- Whole content flex nav and content page --}}
    {{-- use min-h-screen to cover the whole viewpoint of the screen  --}}
    <div class="flex min-h-screen justify-start">
        
        {{-- Navbar Tab Component --}}
        <x-dashboard.nav.nav name="{{ $name }}" />
        
        {{-- Div for site content --}}
        <div class='h-full w-full'>
            <x-dashboard.nav.collapnse-nav />

           <div class="grid h-screen place-items-center shadow-2xl ">
              
            @include('components.dashboard.sections.updateform')
           
        </div>
    </div>
  </div>
@extends('footer')

<script type="text/javascript" src="{{ asset('storage/js/script.js') }}"></script>

