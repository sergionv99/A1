<?php
$primos = array();
$comPrimo= false;
    //empezamos el $i por ya que este es primer primo
for ($i = 2; $i<100; $i++) {
     $comPrimo = true; 
            //se divide el $i entre 2
        for ($pr = 2; $pr<=($i/2); $pr++) {
                //Con esto comprobamos si el tiene multiplos
                if ($i%$pr==0) {
                          $comPrimo = false;
                                }
                   }
                   //si ha llegado hasta aqui indica que es un numero primo
        if ($comPrimo) {
            //con array_push insetamos un numero al final del array
               array_push($primos,$i);
                  }
}
//array_sum suma los valores del array 
echo array_sum($primos)."\n";
