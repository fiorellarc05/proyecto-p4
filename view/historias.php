<!--View all blogs page-->
<?php include 'controller/view.php';?>

<!--Link to post a new blog-->
<a href="?c=agregar">Agregar nuevo blog</a>

<?php foreach($rows as $row) {?>

<div class="card-custom">
  <!--Author of the blog-->
  <div class="card-header">
    <?php echo $row->author;?>
  </div>
  <div class="card-body">
    <!--Title of the blog-->  
    <h5 class="card-title"><?php echo $row->title;?></h5>
    <!--Message of the blog-->
    <p class="card-text"><?php echo $row->message; ?></p>
  </div>
     <?php } ?> 
</div>
 



