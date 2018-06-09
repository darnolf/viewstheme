<?php
global $user;
if(in_array('administrator', array_values($user->roles))) {
  print '<a href="'. base_path() . 'node/' . $data->nid . '/edit">EDIT</a>';
}
?>


 <div class="title"><?php print $fields['title']->content; ?></div>


 $filepath = file_create_url( $data->file_managed_file_usage_uri );
<div style="background-color: teal; background-image: url(<?php  print $filepath ; ?>); width: 50px; height: 50px;"></div>


 <?php $filepath = file_create_url( $row->uri );?>
<a href="#" style="background-color: teal; background-image: url(<?php  print $filepath ; ?>); width: 250px; height:250px; display: block;" ><span style=" width: 250px; height:250px; display: block; background: rgba(0,0,0,0.75)"><?=$row->title ?></span></a>