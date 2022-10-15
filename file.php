<?php
/* if(isset($_GET['file']) && (!is_numeric(strpos($_GET['file'],'/')))) for avoid the path Traversal */
if(isset($_GET['file']))
{
echo '<br>';
$filename = $_GET['file'];
include $filename;
echo '<br>';
echo "Filename : ".$filename;
}
else
{
echo "Nothing is here!";
}
?>
