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
            <x-dashboard.content.title />

            {{-- Table of Orders--}}
            @include('components.dashboard.sections.table2')

            </div>
           
        </div>
    </div>
  
@extends('footer')





<script>
    function toggleButton() {
        const list = document.getElementById("collapsenav").classList;
        list.add("block");
        //list.add("absolute")
        var element = document.getElementById("collapsenav");
        element.classList.remove("hidden");

        const openButton = document.getElementById("open");
        openButton.style.display = "none";

        const closeButton = document.getElementById("close");
        closeButton.style.display = "block";

}
    function toggleButtonClose(){
        const list = document.getElementById("collapsenav").classList;
        list.add("hidden");
        
        var element = document.getElementById("collapsenav");
        element.classList.remove("block");

        const openButton = document.getElementById("open");
        openButton.style.display = "block";

        const closeButton = document.getElementById("close");
        closeButton.style.display = "none";
    }
</script>