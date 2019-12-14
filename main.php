<?php

<h2>Ethio Election 2012</h2>
<p> Your're required to select your desired party representatives given below</p>
$rep_id;

<form action="index.php" method="post">
for(each $rep_id as $rep_id1)
{
echo $rep_id1;
echo $f_name, $s_name;
<input type="radio" name="ele_id" value="male" checked> $rep_id<br>
  <input type="radio" name="gender" value="female"> Female<br>
</form>
}

?>