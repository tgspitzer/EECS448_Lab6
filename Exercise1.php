<?php
  for($i=1; $i<= 100; $i++)
  {
    echo("<tr>");
    for($j=1; $j<=100; $j++)
    {
      $mult = $i*$j;
      echo("<td> $mult </td>");
    }
    echo ("</tr>");
  }
?>
