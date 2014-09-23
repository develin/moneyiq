<?php

function getfieldvalue($node,$name)
{
   $field = field_get_items('node', $node, $name);
   return $field[0]['value'];
}

function getfieldviewvalue($node,$name)
{
  $field = field_get_items('node', $node, $name);
   return trim(field_view_value('node', $node, $name, "teaser")); 
}


function getCreditCardImage($node, $cname)
{
  $field = field_get_items('node', $node, 'field_'.$cname);
  if($field[0]['value'] == 1)
  { 
    return $cname . ".png";
  } 

  return $cname . "-inactive.png";
}

function getImageTag($content, $node, $cname)
{
  hide($content['field_'.$cname]);  
  $value = getCreditCardImage($node, $cname);
  return "<img src=\"http://localhost/app/themes/moneyiq/images/cc/$value\">";
}

function renderCCImage($content, $node)
{
  $value  = "<table width=\"31\" border=\"0\" colspace-\"0\">";
  $value .= "<tr><td>";
  $value .= getImageTag($content, $node, 'visa') . "</td><td>";
  $value .= "</td></tr>";
    $value .= "<tr><td>";
  $value .= getImageTag($content, $node, 'master') . "</td><td>";
  $value .= "</td></tr>";
    $value .= "<tr><td>";
  $value .= getImageTag($content, $node, 'jcb') . "</td><td>";
    $value .= "</td></tr>";
    $value .= "<tr><td>";
  $value .= getImageTag($content, $node, 'amex') . "</td><td>";
  $value .= "</td></tr>";
    $value .= "<tr><td>";
  $value .= getImageTag($content, $node, 'diners') . "</td><td>";
    $value .= "</td></tr>";
    $value .= "<tr><td>";
  $value .= getImageTag($content, $node, 'discover') . "</td><td>";
  $value .= "</td></tr>";
  $value .= "</table>";
  return $value;
}

function getpoint($content, $node, $name)
{
  hide($content['field_'.$name]);  
  $value = getfieldvalue($node,'field_' . $name);
  if(strlen($value)>0) {
    $value = "<li>" . $value . "</li>";    
  }
  return $value;
}

function getpluspoints($content, $node)
{  
  $value = "<ul class=\"list-plus\">";
  $tmpval = getpoint($content, $node, 'plus_1');
  if(strlen($tmpval)>0) $value .= $tmpval;
  $tmpval = getpoint($content, $node, 'plus_2');
  if(strlen($tmpval)>0) $value .= $tmpval;
  $tmpval = getpoint($content, $node, 'plus_3');
  if(strlen($tmpval)>0) $value .= $tmpval;
  $value .= "</ul>";
  return $value;
}  

function getminuspoints($content, $node)
{  
  $value = "<ul class=\"list-dash\">";
  $tmpval = getpoint($content, $node, 'minus_1');
  if(strlen($tmpval)>0) $value .= $tmpval;
  $tmpval = getpoint($content, $node, 'minus_2');
  if(strlen($tmpval)>0) $value .= $tmpval;
  $tmpval = getpoint($content, $node, 'minus_3');
  if(strlen($tmpval)>0) $value .= $tmpval;
  $value .= "</ul>";
  return $value;
}  



?>