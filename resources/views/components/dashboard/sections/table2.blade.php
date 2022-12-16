{{-- --}}


<div class="shadow-2xl content-center mt-20 mb-10 ml-5 mr-5 overflow-x-auto overflow-auto" style=" height: 400px;">
    <table class="table-auto border-separate border-spacing-1 w-full  text-left">
        <thead class="text-left font-bold bg-tablecolor text-2xl mb">
            <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Status</th>    
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @php
                        $status = $user->status;     
                        $str = strtoupper($status);
                
                        if (strcmp($str,'ACTIVE')==0) {
                        $color='#00acee';
                        $bg='#e0f2fe';
                        $border = '#1fb6ff';
                        }else{
                        $color = 'red';
                        $bg = 'pink';
                        $border = '#7f1d1d';
                        }
                
                @endphp
                <tr class="text-left text-s text-navgrey">
                    <td class="pt-5 pb-5">{{ $user->user_id }}</td>
                    <td class="pt-5 pb-5">{{ $user->name }}</td>
                    <td class="pt-5 pb-5">{{ $user->lastname }}</td>
                    <td class="pt-5 pb-5 text-center">
                        <div class="newstatusborder rounded-full " style="color: {{$color}} ; background-color: {{ $bg }}; border: 1px solid {{ $border }}">
                            {{ $str }}
                         </div>
                    </td>
                </tr>
            @endforeach
           
        </tbody>
    </table>
    
  </div>
 