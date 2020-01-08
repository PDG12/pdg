<?php
  $a= readline("entrez votre age:");  
    if (($a>=55))
  {
      echo ("vous etes agee");
  }
  elseif (($a>=18))
  {
     echo ("vous etes majeur");
  }
  elseif (($a>=13))
  {
     echo ("vous etes mineur");
  }
  elseif(($a>=3) OR ($a<=12))
  {
      echo ("vous etes un enfant");
  }
  ?>