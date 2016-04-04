<?php



function getString($value){

    if( ($value == null) || (is_resource($value)) || (is_numeric($value)) || (is_bool($value))
            || (is_array($value)) || (is_object($value)) ){

         throw new Exception('Your input is not a string or null!');

    }

        
    return $value;
      

}

getString('asdf');