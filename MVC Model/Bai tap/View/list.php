<h2>List of product</h2>
<a href="./index.php?page=add">Add new</a>
<form action="./index.php?page=search" method="POST">
        <table>
            <tr>
                <td><input type="text" name = "tukhoa" placeholder="Enter to search " ></td>
                <td><input type="submit" value="Search"></td>
            </tr>
        </table>
    </form>
<table class="table">
  <thead>
  <tr>
      <th>STT</th>
      <th>NameProduct</th>
      <th>Price</th>
      <th>Desciption</th>
      <th></th>
      <th></th>
  </tr>
  </thead>
  <tbody>

  <?php foreach ($products as $key => $product): ?>
  <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $product->nameProduct ?></td>
      <td><?php echo $product->price ?></td>
      <td><?php echo $product->desProduct ?></td>
      <td> <a onclick="return confirm('Do you really want delete')" href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
      <td> <a onclick="return confirm('Do you really want edit')" href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-danger">Update</a></td>
      <td> <a href="./index.php?page=view&id=<?php echo $product->id; ?>" class="btn btn-success">View</a></td>
  <?php endforeach; ?>
  </tbody>
</table>