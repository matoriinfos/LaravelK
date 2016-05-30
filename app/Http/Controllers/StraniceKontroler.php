<?php

namespace App\Http\Controllers;

class StraniceKontroler extends Controller{
  public function  getIndex(){
    return view ('stranice.welcome');
    }
  public function getOnama(){
    $ime = 'Boki';
    $prezime = 'Mihailov';
    $sve = $ime. " ".$prezime;
    $grad = 'Beogradajo';
    
    $nekiniz=[];
    $nekiniz=['$sve'];
    $nekiniz= ['$grad'];
    
     return view ('stranice.about')->withNiz('$nekiniz');
               // ->with("imeiprezime",$sve)
               // ->withMesto($grad);
   } 
  public function getKontakt(){
     return view ('stranice.kontakt');
   } 
 
    
}
