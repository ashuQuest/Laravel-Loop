<h1>{{$number}}</h1>

@php $i = 0; @endphp

@while($i < $number) 
    @if($i % 2 == 0)
        <h2>{{$i}}</h2>
    @endif
    @php $i++; @endphp
@endwhile