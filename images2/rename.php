<?php
if ($handle = opendir('.')) {
  $files = array();
  while (false !== ($entry = readdir($handle))) {
    if (str_ireplace('.jpg', '', $entry) != $entry) {
      $files[] = $entry;
    }
  }
  closedir($handle);
  sort($files, SORT_NUMERIC);
  foreach ($files as $key => $value) {
    rename('./' . $value, './' . ($key + 1) . '.jpg');
  }
}
?>
