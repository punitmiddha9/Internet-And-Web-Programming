<?php
function nCr( $n, $r)
{
 return fact($n) / (fact($r) *
 fact($n - $r));
}
function fact( $n)
{
 $res = 1;
 for ( $i = 2; $i <= $n; $i++)
 $res = $res * $i;
 return $res;
}
 $n = 11;
 $r = 9;
 echo nCr($n, $r);
?>