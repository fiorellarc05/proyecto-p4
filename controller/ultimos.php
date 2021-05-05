<?php

include 'model/blog.php';
$blog = new blog();
$rows = $blog->ultimos();