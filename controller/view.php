<!--Connection to view all blogs-->

<?php

include 'model/blog.php';
$blog = new blog();
$rows = $blog->read();