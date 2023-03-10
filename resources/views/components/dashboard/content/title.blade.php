<div class="flex flex-wrap" style="font-size: 30px">
    <div class="flex-auto ml-10">
        Restaurant Orders
    </div>               
</div>

<div class="flex flex-wrap mt-9 ml-10 mr-5 overflow-hidden overflow-x-auto gap-4">
    <div class="flex-auto text-center rounded-xl bg-orderscolor shadow-inner">
        <h3 class="text-3xl text-iceblue">{{ $products->total() }}</h3>
        <p class="pt-4">Total Orders</p>
    </div>
    <div class="flex-auto text-center rounded-xl bg-orderscolor shadow-inner">
        <h3 class="text-3xl text-green">{{ $delivered }}</h3>
        <p class="pt-4">Total Delivered</p>
    </div>
    <div class="flex-auto text-center rounded-xl bg-orderscolor shadow-inner">
        <h3 class="text-3xl text-review">{{ $pending }}</h3>
        <p class="pt-4">Pending Orders</p>
    </div>
    <div class="flex-auto text-center rounded-xl bg-orderscolor shadow-inner">
        <h3 class="text-3xl text-red">{{ $hold }}</h3>
        <p class="pt-4">Orders Hold</p>
    </div>
    <div class="flex-auto text-center align-center">
        <button onclick="toggleModal()" class="addbutton rounded-full p-2">Add New Product Order</button>
        {{-- <a href="#" class="addbutton rounded-full p-4">Add New Order</a> --}}
    </div>
</div>