
<div class="row justify-content-center">
<div class="card mt-3" style="background-color:#F16B4E ;width:60%">
  <div class="card-header" >
    <h3>add product </h3>
  </div>
  <div class="card-body mt-3">
  <form action="/crud_oop/product/create" method="post">

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
            <input type="text" class="form-control" name="quantity" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <select class="form-select" aria-label="Default select example" name="category_id">
            <option selected>select category</option>
            <?php foreach($categories as $category): ?>
             <option value="<?php echo $category->getId() ?>"><?php echo $category->getName() ?></option>
            <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-primary mt-3" name="create">Submit</button>

        </form>
        
        </div>
        </div>
        </div>