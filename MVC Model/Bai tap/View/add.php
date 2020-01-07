
<div class="col-12 col-md-12">
  <div class="row">
      <div class="col-12">
          <h1>Add new product</h1>
      </div>
      <div class="col-12">
          <form method="post">
              <div class="form-group">
                  <label>Name Product</label>
                  <input type="text" class="form-control" name="nameProduct"  placeholder="Enter a name" required>
              </div>
              <div class="form-group">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" placeholder="Enter a price" required>
              </div>
              <div class="form-group">
                  <label>Description</label>
                  <input type="text" class="form-control" name="desProduct" placeholder="Enter description" required>
              </div>
              <button type="submit" class="btn btn-primary">Add</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
          </form>       
     </div>   
   </div> 
</div> 