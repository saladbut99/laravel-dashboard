{{-- --}}


<div class="shadow-2xl content-center mt-20 mb-10 ml-5 mr-5 overflow-x-auto overflow-auto" style=" height: 400px;">
    <table class="table-auto border-separate border-spacing-1 w-full  text-left">
        <thead class="text-left font-bold bg-tablecolor text-2xl mb">
            <tr>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Date Ordered</th>    
                <th>Product Sold</th>  
                <th>Status</th>
                <th>Command</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                @php
                        $status = $product->status;     
                        $str = strtoupper($status);
                
                        if (strcmp($str,'DELIVERED')==0) {
                            $color='green';
                            $bg='#d9f99d';
                            $border = 'green';
                        }  else if(strcmp($str,'HOLD')==0){
                            $color = 'red';
                            $bg = 'pink';
                            $border = '#7f1d1d';
                        }else{
                            $color = '#facc15';
                            $bg = '#fef9c3';
                            $border = '#facc15';
                        }
                
                @endphp
                <tr class="text-left text-s text-navgrey">
                   
                    <td class="pt-5 pb-5">{{ $product->product_name }}</td>
                    <td class="pt-5 pb-5">{{ $product->product_category }}</td>
                    <td class="pt-5 pb-5">{{ $product->date_added }}</td>
                    <td class="pt-5 pb-5 text-center">{{ $product->product_sold }}</td>
                    <td class="pt-5 pb-5 text-center">
                        <div class="newstatusborder rounded-full " style="color: {{$color}} ; background-color: {{ $bg }}; border: 1px solid {{ $border }}">
                            {{ $str }}
                         </div>
                    </td>
                    <td class="pt-5 pb-5 text-center">
                        
                        <a href="/update/{{ $product->product_id }}" class="text-update rounded-lg " title="Update">
                            <span class="material-symbols-outlined">
                                update
                            </span>
                        </a>
                        <br>
                        <form action="/delete/{{ $product->product_id }}" method="post">
                            <input class="btn btn-default" type="submit" value="Delete"  />
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
           
        </tbody>
    </table>
    
  </div>
 