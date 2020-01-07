<h2>Update Information Product</h2>
<form method="post" action="./index.php?page=edit">
  <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
  <div class="form-group">
      <label>Name Product</label>
      <input type="text" name="nameProduct" value="<?php echo $product->nameProduct; ?>" class="form-control"/>
  </div>
  <div class="form-group">
      <label>Price</label>
      <textarea name="price" class="form-control"><?php echo $product->price; ?></textarea>
  </div>
  <div class="form-group">
      <label>Desciption</label>
      <textarea name="desProduct" class="form-control"><?php echo $product->desProduct; ?></textarea>
  </div>
  <div class="form-group">
      <input type="submit" value="Update" class="btn btn-primary"/>
      <a  href="index.php" class="btn btn-default">Cancel</a>
  </div>
</form>