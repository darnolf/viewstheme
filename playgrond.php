<?php
global $user;
if(in_array('administrator', array_values($user->roles))) {
  print '<a href="'. base_path() . 'node/' . $data->nid . '/edit">EDIT</a>';
}
?>


<?php
kpr($data->file_managed_file_usage_uri );
 ?>

 <div class="title"><?php print $fields['title']->content; ?></div>