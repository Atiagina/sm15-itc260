<?php
//Rss_model.php

class Rss_model extends CI_Model {

    
        public function get_rss()
        {
                   $request = "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&q=cats+musicians&output=rss";
              
            
            $response = file_get_contents($request);
      $xml = simplexml_load_string($response);
            return $xml;
            
        }//end function
                
} //end Rss_model