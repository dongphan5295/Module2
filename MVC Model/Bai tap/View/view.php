<a href="index.php" class="btn btn-default">Return to List</a>
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
        <tr>
            <td><?php echo $product->id; ?></td>
            <td><?php echo $product->nameProduct; ?></td>
            <td><?php echo $product->price; ?></td>
            <td><?php echo $product->desProduct; ?></td>
    </tbody>
</table>