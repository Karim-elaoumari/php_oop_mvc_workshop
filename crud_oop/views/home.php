
<h2 class="m-3">home : products</h2>
    <table class="table" >
        <div class="d-flex justify-content-end p-2">
            <a href="product/add" class="btn btn-primary" >add</a>
        
    
        </div>
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
          <?php foreach($products as $product): ?>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $product->getName() ?></td>
            <td><?php echo $product->getPrice() ?></td>
            <td><?php echo $product->getQuantity() ?></td>
            <td><?php echo $product->getDescription() ?></td>
            <td><?php echo $product->getCategory()->getName() ?></td>
            <td> <a href="product/delete?id=<?php echo $product->getId() ?>" class="btn btn-danger" >delete</a>
                 <a href="product/edit?id=<?php echo $product->getId() ?>" class="btn btn-warning" >update</a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        
    </table>


<