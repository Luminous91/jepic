<?php
/**
* Standard controller layout.
* 
* @package JepicCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $je;
      $je->data['title'] = "The Index Controller";
      $je->data['main'] = "<h1>The Index Controller</h1>";
   }

}
