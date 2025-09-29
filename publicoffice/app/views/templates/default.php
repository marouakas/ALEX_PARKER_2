<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php include '../app/views/templates/partials/_head.php'; ?>
    
</head>

<body>
    <?php include '../app/views/templates/partials/_sidebar.php'; ?>
    <?php include '../app/views/templates/partials/_addpost.php'; ?>
    
<main>
  <div class="container">
                    <?php echo $content; ?>


 
</div>

                
</main>
   
<?php include '../app/views/templates/partials/_footer.php'; ?>
    
<?php include '../app/views/templates/partials/_scripts.php'; ?>


</body>

</html>