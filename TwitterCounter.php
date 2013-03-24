<?php
   global $total, $hashtag;
   $hashtag = '#sealevelrise' Or '#SeaLevelRise';
   $total = 0;
   function getTweets($hash_tag, $page) {
      global $total, $hashtag;
      $url = 'http://search.twitter.com/search.json?q='.urlencode($hash_tag).'&';
      $url .= 'page='.$page;
      $ch = curl_init($url);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
      $json = curl_exec ($ch);
      curl_close ($ch);

      $json_decode = json_decode($json);
      $total += count($json_decode->results);
      if($json_decode->next_page){
         $temp = explode("&",$json_decode->next_page);
         $p = explode("=",$temp[0]);
         getTweets($hashtag,$p[1]);
      }
   }

   getTweets($hashtag,1);
   echo '<'.$total.'>';
?>