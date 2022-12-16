@extends('layouts')

@php
    $name = 'John Doe'
@endphp


    {{-- Whole content flex nav and content page --}}
    {{-- use min-h-screen to cover the whole viewpont of the screen  --}}
    <div class="flex min-h-screen justify-start">

        {{-- Navbar Tab Component --}}
        <x-dashboard.nav.nav name="{{ $name }}" />

        {{-- Div for site content --}}
        <div class='h-full w-full'>

            {{-- hidden will take effect when the screen is medium, collapsable sidebar --}}
            <x-dashboard.nav.collapnse-nav />

           
            <div class="mt-10 ml-5 mr-5" >
            
                {{-- Content Page Info Tab and Page Title--}}
                <x-dashboard.content.title :users="$users" />

                {{-- Table of Orders--}}
                
                @include('components.dashboard.sections.table2')
                <div class="m-10 mb-15 text-navgrey">
                    {{ $users->links() }}
                </div>
            </div>
           
        </div>
    </div>
  
@extends('footer')

<script type="text/javascript" src="{{ asset('storage/js/script.js') }}"></script>