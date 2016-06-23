<?php
class Brackets 
{
    private static $bracket_counter = Array('(' => ')','[' => ']','{' => '}');
   
    private static $bracket_status = true;
  
  public static function isEven($arr) {
	  
	  if(count($arr)%2 == 0) {
		  
		  while(is_array($arr) && (count($arr) > 0))  {
		    $arr = self::countBrackets($arr);
		  }
		  return self::$bracket_status;
	  }
	  else 
		  return false;
  }
  
  public static function countBrackets($arr) 
  {
	  
    if(is_array($arr) && (count($arr) > 0))  {
      if(isset(self::$bracket_counter[$arr[0]]) )  {
		//  The first character on a new level MUST be an open bracket.  Otherwise, return false
		while(isset(self::$bracket_counter[$arr[0]]) )  {
		  $openbracket = array_shift($arr);  
          //$arr = self::countBrackets($arr);
		  if(is_array($arr) && (count($arr) > 0))  {
			while(isset(self::$bracket_counter[$arr[0]]))  {  
				$arr = self::countBrackets($arr);  //  Process any number of other open parentheses on the same horizontal level
				
				//print_r($arr);
				//echo " \n Hello 1 \n ";
				//echo " \n array value: " . self::$bracket_counter[$arr[0]] . " \n ";
            }
		    if(self::$bracket_counter[$openbracket] == $arr[0]) { //  Process the matching closed parenthesis
				
				//echo " \n Hello 2 \n ";
              $closebracket = array_shift($arr);
				//print_r($arr);
				//echo " \n array value: " . self::$bracket_status . " \n ";
			  return $arr;
			}
			else  {  //  Otherwise it doesnt match the open bracket and there is an error
              self::$bracket_status = false; 
              return self::$bracket_status;
          
            } 
		  }
          else  {
            self::$bracket_status = false; 
            return self::$bracket_status;
          
          }   
		}
		
	    
	  }
	  else  {
    	  self::$bracket_status = false; 
	      return self::$bracket_status;
	  
	  }    
    }
    else  {
      return self::$bracket_status;
          
    }
          
    
  }
}