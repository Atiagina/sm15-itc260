<?php
//Rss.php

class Rss extends CI_Controller {

            public function index()
        {
/*
$request="https://www.google.com/search?hl=en&gl=us&tbm=nws&authuser=0&q=cats+music&oq=cats+music&gs_l=news-cc.3..43j0l2j43i53.3137.5089.0.5300.10.6.0.4.4.0.28.84.6.6.0...0.0...1ac.1.aptZUblvVZc&gws_rd=ssl";
*/
      //$request = "http://rss.news.yahoo.com/rss/software";
    $request = "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&q=cats+music&output=rss";
      $response = file_get_contents($request);
      $xml = simplexml_load_string($response);
      print '<h1>' . $xml->channel->title . '</h1>';
      foreach($xml->channel->item as $story)
      {
        echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
        echo '<p>' . $story->description . '</p><br /><br />';
      }
           // $data['news'] = $this->news_model->get_news();
           // $data['title'] = 'News archive';

            //$this->load->view('templates/header', $data);
           // $this->load->view('news/index', $data);
            //$this->load->view('templates/footer');
    } //end index

    
} //end Rss