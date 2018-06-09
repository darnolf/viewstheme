<?php

/**
 * @file
 * The primary PHP file for this theme.
 */




/**
 * @file
 * Override PATH output view.
 */

 function bstrap_custom_views_view_field__bootstrap__page__uri ($variables) {
   //kpr($variables['output']);
   $output = '<div style="background: red;">'.$variables['output'].'</div>';
   return ($output);
 }