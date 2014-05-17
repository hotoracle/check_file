<?php
$filename = './soft_pics/30080496_152d3b178b02301b31f0c21db897d6c401e5561ab54a964ca168882ed2931ab2.jpg';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
 echo '<img src='.$filename.'>';
?>