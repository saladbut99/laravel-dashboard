
<div class="rounden-full grid h-screen place-items-center fixed top-0 left-0 right-0 z-50 w-full bg-navgrey bg-opacity-50 p-4 overflow-y-auto h-full md:h-full sm:h-full hidden" style="border: 1px solid black" id="modal">
    <div class="shadow-lg bg-white w-96 h-3/4 grid h-screen" style="border: 2px solid #00acee; border-radius: 20px;">
        <div class=" overflow-x-auto overflow-auto">
                <div class="flex-auto h-0 mt-5 mr-5">
                    <h1 class="text-right">
                        <button onclick="closeModal()" >
                            <span class="material-symbols-outlined">
                                close
                            </span>
                        </button>        
                    </h1>
                </div>  
                <div class="flex-auto m-1 w-50 text-left mt-5">
                    <form action="add_product" method="POST" class="text-center">
                        @csrf
                        <div>
                            <label for="product_name" class="text-left mb-10 font-bold" style="font-size:18px;">Product Name</label>
                            <br>
                            <input class="w-2/3 rounded-lg  " type="text" name="product_name" id="product_name" style="border: 2px solid #00acee" required>
                        </div>
                        <div>
                            <br>
                            <label for="product_category" class="text-left mb-10 font-bold" style="font-size:18px;">Product Category</label>
                            <br>
                            <input class="w-2/3 rounded-lg " type="text" name="product_category" id="product_category" style="border: 2px solid #00acee" required>
                        </div>
                        <div>
                            <br>
                            <label for="product_sold" class="text-left mb-10 font-bold" style="font-size:18px;">Product Sold</label>
                            <br>
                            <input class="w-2/3 rounded-lg " type="number" name="product_sold" id="product_sold" style="border: 2px solid #00acee" required>
                        </div>
                    <div class="mb-10">
                            <br>
                            <label for="status" class="font-bold" style="font-size:18px;">Status</label>
                            <br>
                            <select class="w-2/3 rounded-lg " name="status" id="status" style="border: 2px solid #00acee">
                                <option value="delivered">Delivered</option>
                                <option value="pending">Pending</option>
                                <option value="hold">Hold</option>
                            </select>
                            <br>
                    </div>
                    <div>
                        <button class="w-1/2 rounded-full w-1/2 p-2 bg-buttonbg hover:bg-blue" style="border: 3px solid #00acee">Add New Product</button>
                    </div>

                    </form>
                </div>              
            </div>
        </div>

    </div>
</div>