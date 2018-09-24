<?php 
foreach($viewData['productList'] as $product){
?>
<div class="item col-xs-4 col-lg-4">
    <div class="thumbnail card">
        <div class="img-event">
            <img class="group list-group-image img-fluid" src="<?php echo IMAGE_PATH.'swades.jpeg' ?>" alt="" />
        </div>
        <div class="caption card-body">
            <p >Name :  <?php echo $product->getName() ?></p>
            <p >Category :  <?php echo $product->getCategory() ?></p>
            <p >Size :  <?php echo $product->getSize() ?></p>
            <p >Price :  <?php echo $product->getPrice() ?></p>
        </div>
    </div>
</div>
<?php
}
?>
