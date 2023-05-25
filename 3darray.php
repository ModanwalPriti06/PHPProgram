<?php
     $arr=array(
         "Preeti"=>array(
             "Cs"=>array(
                 "Rollno=>34,
                 Email=>pritivns@gmail.com"),
             ),
         "Akriti" =>array(
            "Cs"=>array(
                "Rollno=>03,
                Email=>akritivns@gmail.com"),
            ),
         "Manali"=>array(
                    "Cs"=>array(
                        "Rollno=>24,
                        Email=>manalivns@gmail.com"),
                    ),
     
);
     foreach($arr as $keys=>$values){
        foreach($values as $keyn=>$value){
            foreach($value as $key=>$val){
          echo $keys." ".$val."<br>";
          echo "<hr/>";
            }
        }
    }
    //only keys print in 3darray
    foreach($arr as $keys=>$values){
        foreach($values as $keyn=>$value){
            foreach($value as $key=>$val){
          echo $keys." ".$keyn." ".$key."<br>";
          print_r($arr);
            var_dump($arr);
            }
        }
    }

     ?>