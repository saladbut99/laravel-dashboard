@php
       $status = $users->status;     
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
    <td class="pt-5 pb-5">{{ $users->user_id }}</td>
    <td class="pt-5 pb-5">{{ $users->name }}</td>
    <td class="pt-5 pb-5">{{ $users->lastname }}</td>
    <td class="pt-5 pb-5 text-center">
        <div class="newstatusborder rounded-full " style="color: {{$color}} ; background-color: {{ $bg }}; border: 1px solid {{ $border }}">
            {{ $str }}
         </div>
    </td>
</tr>