<?php
include_once 'Countrys.php';
$Countrys=new Countrys();
$Countrys->Add('Vietnam',999999);
$Countrys->Add('America',124);
$Countrys->Add('Russia',100000);
$Countrys->Add('Japan',15000);
$Countrys->Add('China',1);
$Countrys->Add('North Korea',12345);
$Countrys->Add('South Korea',12535);
$Countrys->Sort();
