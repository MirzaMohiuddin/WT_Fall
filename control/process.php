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
    

}




?>