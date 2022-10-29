<?php
$nameError="";
$nidError="";
$zcError="";
$passError="";
$genderError="";

if(isset($_REQUEST["enter"]))
{
    if(empty($_REQUEST["name"]))
    {
        $nameError= "Name is Required";
    }
    else
    {
        $nameError= "Your Name is: ".$_REQUEST["name"];
    }
    
    if(strlen($_REQUEST["nId"])<10)
    {
        $nidError= "NID No must be 10 chars";
    }
    else
    {
        $nidError= "Your NID No is: ".$_REQUEST["nId"];
    }

    if(isset($_REQUEST["gender"]))
    {
        $genderError= $_REQUEST["gender"];
    }
    else
    {
        $genderError= "You must select your Gender";
    }


    if(strlen($_REQUEST["zCode"])<4)
    {
        $zcError= "Zipcode must be 4 char";
    }
    else
    {
        $zcError= "Your Zip Code is: ".$_REQUEST["zCode"];
    }

    if(strlen($_REQUEST["password"])<6)
    {
        $passError= "Password must have 6 char";
    }
    else
    {
        $passError= "";
    }

    if($hasError==0){

        $existingdata = file_get_contents('data.json');
        $existingdatainphp = json_decode($existingdata);
    
        $myarray=array(
        "Name"=> $_REQUEST["name"],
        "Fathername"=> $_REQUEST["fName"],
        "Mothername"=> $_REQUEST["mName"],
        "Address"=> $_REQUEST["preAddress"],
        "NID"=> $_REQUEST["nId"],
        "Mobile number"=> $_REQUEST["mNo"],
    
    );
    $existingdatainphp[]=$myarray;
        $myjsondata = json_encode( $existingdatainphp, JSON_PRETTY_PRINT);
        file_put_contents("data.json", $myjsondata);
} 

}




?>