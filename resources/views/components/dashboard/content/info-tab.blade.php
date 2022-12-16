{{-- use this if you want overflow for the class: flex flex-nowrap mt-10 ml-10 overflow-x-auto space-x-4 --}}
<div class="flex flex-wrap mt-9 ml-10 mr-5 overflow-hidden overflow-x-auto gap-4">
    <div class="flex-auto text-center rounded-xl bg-orderscolor shadow-inner">
        <h3 class="text-3xl text-iceblue">27500</h3>
        <p class="pt-4">Total Orders</p>
    </div>
    <div class="flex-auto text-center rounded-xl bg-orderscolor shadow-inner">
        <h3 class="text-3xl text-green">4500</h3>
        <p class="pt-4">Total Delivered</p>
    </div>
    <div class="flex-auto text-center rounded-xl bg-orderscolor shadow-inner">
        <h3 class="text-3xl text-pink">1500</h3>
        <p class="pt-4">Pending Orders</p>
    </div>
    <div class="flex-auto text-center rounded-xl bg-orderscolor shadow-inner">
        <h3 class="text-3xl text-red">750</h3>
        <p class="pt-4">Orders Hold</p>
    </div>
    <div class="flex-auto text-center align-center">
        <button class="addbutton rounded-full p-2">Add New Order</button>
        {{-- <a href="#" class="addbutton rounded-full p-4">Add New Order</a> --}}
    </div>
</div>