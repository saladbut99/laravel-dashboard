@extends('layouts')

@php
    $name = 'John Doe'
    
@endphp

        @include('components.dashboard.sections.forms')
        @include('components.dashboard.sections.updateModal')


    {{-- Whole content flex nav and content page --}}
    {{-- use min-h-screen to cover the whole viewpoint of the screen  --}}
    <div class="flex min-h-screen justify-start">
        
        {{-- Navbar Tab Component --}}
        <x-dashboard.nav.nav name="{{ $name }}" />
        
        {{-- Div for site content --}}
        <div class='h-full w-full'>

            {{-- hidden will take effect when the screen is medium, collapsable sidebar --}}
            <x-dashboard.nav.collapnse-nav />

           
            <div class="mt-10 ml-5 mr-5" >
               
            
                {{-- Content Page Info Tab and Page Title--}}
                <x-dashboard.content.title :products="$products" :delivered="$delivered" :pending="$pending" :hold="$hold"/>

                @if(session()->has('message'))
                    <center>
                        <div class="flex justify-center mt-20 mb-0 p-5 rounded-full w-1/2 bg-bgreen" style="border: 2px solid green">    
                                <div class="text-green">
                                    {{ session()->get('message') }}
                                </div>     
                        </div>
                     
                    </center>
                @endif
                @if ($errors->any())
                <center>
                    <div class="flex justify-center mt-20 mb-0 p-5 rounded-full w-1/2 " style="border: 2px solid red">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </center>
                
            @endif

                
                {{-- Table of Orders--}}
                
                @include('components.dashboard.sections.table2')
                <div class="m-10 mb-15 text-navgrey">
                    {{ $products->links() }}
                </div>
            </div>
           
        </div>
    </div>
  
@extends('footer')

<script type="text/javascript" src="{{ asset('storage/js/script.js') }}"></script>
<script>
    function doconfirm()
    {
        job=confirm("Are you sure to delete the question permanently?");
        if(job!=true)
        {
            return false;
        }
    }
    </script>