<?php
/*Elf*/

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "4,065";
          break;

        case "2":
            $xpNext = "8,125";
        break;
        
        case "3":
            $xpNext = "16,251";
        break;
        
        case "4":
            $xpNext = "32,501";
        break;
        
        case "5":
            $xpNext = "65,001";
        break;
        
        case "6":
            $xpNext = "130,001";
        break;        

        case "7":
            $xpNext = "200,001";
        break;
                
        case "8":
            $xpNext = "400,001";
        break;
                
        case "9":
            $xpNext = "600,001";
        break;

        case "10":
            $xpNext = "---";
        break;

        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>