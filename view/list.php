
<?php loadView("header.php"); ?>

<legend> <div class="col-md-4">
    <a href="index.php?controller=product&function=add" id="showlist" name="Showlist" class="btn btn-primary">Add New Product</a>
<div class="container">
    <div id="products" class="row view-group">
       <?php loadView("productGrid.php",$viewData); ?>
    </div>
</div>