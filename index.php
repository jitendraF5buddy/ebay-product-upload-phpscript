<?php include("ebay.php"); ?>

<html>
  <title></title>
  <head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">
<?php 
    if(isset($data) && count($data)>0){
        if($data['status'] == 'uploaded'){ ?>
            <div class="alert alert-success" role="alert">
              Successfully uploaded your product ID is <?php echo $data['itemID']; ?>
            </div>
        <?php }

}?>


      <h3>Add Ebay Product</h3>
      <hr />
    <form action="" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Item title</label>
          <input type="text" class="form-control" name="item_title">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Condition</label>
            <select name="condition" class="form-control">
              <option value="1000">New</option>
              <option value="3000">Used</option>
            </select>
        </div>
      </div>

      <div class="form-group">
       <label for="inputPassword4">Item description</label>
          <input type="text" class="form-control" name="item_description">
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Listing Type</label>
     
            <select name="listingtype" class="form-control">
                <option value="FixedPriceItem">Fixed Price Item</option>
                <option value="Auctionstylelistings">Auction-style listings</option>         
                <option value="ClassifiedAds">Classified Ads</option> 
                <option value="Chinese">Chinese</option>        
              </select>
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Listing Duration</label>
            <select name="listingDuration" class="form-control">
              <option id="Days_30" value="GTC">GTC</option>
              <option id="Days_30" value="Days_30">30 days</option>
              <option id="Days_1" value="Days_1" style="display: none;">1 days</option>
              <option id="Days_3" value="Days_3">3 days</option>
              <option id="Days_5" value="Days_5">5 days</option>
              <option id="Days_7" value="Days_7">7 days</option>
              <option id="Days_10" value="Days_10">10 days</option>
              <option id="Days_90" value="Days_90" style="display: none;">90 days</option>                     
            </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Price</label>
          <input type="text" class="form-control" name="startprice">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">SKU</label>
          <input type="text" class="form-control" name="sku">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">UPC</label>
          <input type="text" name="UPC" value="" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Brand</label>
          <input type="text" name="brand" value="" class="form-control">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">ISBN</label>
          <input type="text" name="ISBN" value="" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Quantity</label>
          <input type="text" name="quantity" value="" class="form-control">
        </div>
      </div>

      <div class="form-group">
       <label for="inputPassword4">add Image</label>
          <input type="text" class="form-control" name="image" placeholder="http://example/image.png,http://example/image1.jpg,http://example/image3.jpg">
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
    </form>
  </div>

  </body>
</html>