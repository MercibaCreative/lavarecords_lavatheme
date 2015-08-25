<?php

add_theme_support('post-thumbnails');

function word_trim($string, $count, $ellipsis = true){
  $words = explode(' ', $string);
  if (count($words) > $count){
    array_splice($words, $count);
    $string = implode(' ', $words);
    if (is_string($ellipsis)){
      $string .= $ellipsis;
    }
    elseif ($ellipsis){
      $string .= '&hellip;';
    }
  }
  return $string;
}

function nl2p ($text){ 

        // put all text into <p> tags 

        $text = '<p>' . $text . '</p>'; 

        /* replace all newline characters with paragraph  

        ending and starting tags */ 

        $text = str_replace("\n",'</p><p>',$text); 

        // remove any cariage return characters 

        $text = str_replace("\r",'',$text); 

        // remove empty paragraph tags 

        $text = str_replace('<p></p>','',$text); 

        /* optional replacement, if you need a nice-looking  

        XHTML source and not all source in one line.*/ 

        $text = str_replace('</p><p>', "</p>\n<p>", $text); 

        return $text; 

    } 