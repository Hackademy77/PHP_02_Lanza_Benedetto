<?php

function verifica(){ 

    $password = readline ('inserire la password ');

    $check1=false;
    $check2=false;
    $check3=false;
    $check4=false;


    if (strlen($password)>=8){          //controllo lunghezza stringa 
        $check1=true;
    }
    if (!$check1){
        echo "la password è troppo corta \n";
    }




    for ($i=0; $i < strlen($password) ; $i++) {   //controllo numeri presenti nella stringa 
        if (is_numeric($password[$i])){
            $check2=true;

        }


    };

    if(!$check2){
        echo "la password non contiene un carattere numerico \n";
    }


    for ($i=0; $i < strlen($password) ; $i++) {   //controllo lettere maiuscole nella stringa 
        if (ctype_upper($password[$i])){
            $check3=true;
        }
    };
    if(!$check3){
        echo "la password non contiene una lettera maiuscola \n";
    }



    for ($i=0; $i < strlen($password) ; $i++) {

        if(!ctype_alpha($password[$i]) && !is_numeric($password[$i])){
            $check4=true;
        }
    };

    if(!$check4){
        echo "la password non contiene  un carattere speciale \n";
    }

    if ($check1 && $check2 && $check3 && $check4){
        return true;
    }else {

    return false;
    }
};

do { 
    $confirm=verifica();
}
while($confirm==false );






?>