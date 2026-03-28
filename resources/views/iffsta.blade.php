<h2>{{$number}}</h2>

@if($number < 0)
    <h2>Invalid number</h2>
@elseif($number >= 18)
    <h2>You can vote</h2>
@else
    <h2>You can't vote</h2>
@endif
