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
                <div class="bg-white h-3/4 rounded-lg items-center" style="width: 80%; border: 1px solid #00acee;">
                    <div class="flex-col">

                        <div class="flex-auto text-blue m-5 font-extrabold">
                            <a href="/dashboard">Cancel</a>
                        </div>

                        <div class="flex-auto text-blue m-5 font-extrabold text-right" >
                            <center>
                                <h1 style="font-size: 150%;">Update Product</h1>
                            </center>
                        </div>
                        <div class="flex-auto text-white m-5 font-extrabold text-right" >
                            <form action="/update/{{ $product->product_id }}" method="POST" class="text-center">
                                @csrf
                                @method('PATCH')
                                <div>
                                    <input value="{{ $product->product_name }}" placeholder="Product Name" value="" type="text" name="product_name" id="product_name" class="rounded-lg w-1/2 text-black" style="height: 7.5%; border: 2px solid #00acee;">
                                </div>
                                <div>
                                    <br>
                                    <input value="{{ $product->product_category }}" placeholder="Product Category" value="" type="text" name="product_category" id="product_category" class="rounded-lg w-1/2 text-black" style="height: 7.5%; border: 2px solid #00acee;">
                                </div>
                                <div>
                                    <br>
                                    <input value="{{ $product->product_sold }}" placeholder="Product Sold" value="" type="number" name="product_sold" id="product_sold" class="rounded-lg w-1/2 text-black" style="height: 7.5%; border: 2px solid #00acee;">
                                </div>
                                <div>
                                    <br>
                                    <select class="rounded-lg w-1/2 text-black " name="status" id="status" style="height: 7.5%; border: 2px solid #00acee;">
                                        
                                        @foreach ($status as $stat)
                                            @if (strcmp(strtoupper($product->status),$stat)==0)
                                                <option selected class="color-reviewbg" value="{{ $stat }}">{{ $stat }}</option>
                                            @else
                                                <option  class="color-reviewbg" value="{{ $stat }}">{{ $stat }}</option> 
                                            @endif
                                       
                                        @endforeach
                                        
                                        {{-- <option value="status" selected disabled >Status</option>
                                        <option class="color-green" value="delivered">Delivered</option>
                                        <option class="color-reviewbg" value="pending">Pending</option>
                                        <option class="color-hold" value="hold">Hold</option> --}}
                                    </select>
                                    <br>
                                </div>
                                <br>
                                 <div>
                                     <button class="w-1/2 rounded-full w-1/2 p-2 bg-blue cte hover:bg-blue" style="border: 3px solid #00acee">Update Product</button>
                                 </div>
                
                            </form>
                        </div>
                    </div>
               
           </div>
           
        </div>
    </div>
  
@extends('footer')

<script type="text/javascript" src="{{ asset('storage/js/script.js') }}"></script>

