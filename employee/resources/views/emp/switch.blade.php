<b>Switch Statement:</b><br>

<?php $num=8 ?>
@switch($num)
@case(7)
    value is {{$num}}<br>
    @break
@case(8)
    value is {{$num}}<br>
    @break
@case(9)
    value is {{$num}}<br>
    @break
@default
    out of range<br>
@endswitch