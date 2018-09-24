<?php loadView("header.php"); ?>
<legend></legend>
<form class="form-horizontal" method = 'post' action = 'index.php?controller=product&function=add'>

<fieldset>

<!-- Form Name -->
<legend> <div class="col-md-4">
	<a href="index.php?controller=product&function=showList" id="showlist" name="Showlist" class="btn btn-primary">Show List</a>
	
  </div>ADD PRODUCTS</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Images</label>
  <div class="col-md-4">
    <input id="filebutton" name="image" class="input-file" type="file">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">NAME</label>
  <div class="col-md-4">
  <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_sizes">Available Sizes</label>
  <div class="col-md-4">
    <select id="product_sizes" name="size" class="form-control">
    	<option value="size 1">Size 1</option>
    	<option value="size 2">Size 2</option>
    	<option value="size 3">Size 3</option>
    	<option value="size 4">Size 4</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_price">Price</label>  
  <div class="col-md-4">
  <input id="product_price" name="price" placeholder="Price" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_category">Category</label>
  <div class="col-md-4">
    <select id="product_category" name="category" class="form-control">
    	<option value="category 1">Category 1</option>
    	<option value="category 2">Category 2</option>
    	<option value="category 3">Category 3</option>
    	<option value="category 4">Category 4</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Save"></label>
  <div class="col-md-4">
	<button id="Save" name="Save" class="btn btn-primary">Save</button>
	<?php 
		if(!empty($viewData['successMsg'])){
			echo $viewData['successMsg'];
		}
	?>
  </div>
  </div>

</fieldset>
</form>
