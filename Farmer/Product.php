<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Form</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <style>
    body {
  background: url('images/farm.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
      padding: 20px;
    }
    .product-form {
      background: url('images/productbg.jpg');

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .product-form label {
      font-weight: bold;
      color: black;
      font-size: 23px;
    }
    .product-form input[type="text"],
    .product-form input[type="number"],
    .product-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .product-form button {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 10px 20px;
      cursor: pointer;
    }
    .product-form button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2>Enter Product Details </h2>
        <form class="product-form">
          <div class="form-group">
            <label for="productName">Enter Name</label>
            <input type="text" class="form-control" id="productName" placeholder="Enter product name" name="pname" required>
          </div>
          <div class="form-group">
            <label for="quantity">Enter Quantity in Kg</label>
            <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity" required>
          </div>
          <div class="form-group">
            <label for="price">Enter Price for 1 kg</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price"required>
          </div>
          <div class="form-group">
            <label for="description">Enter Description</label>
            <textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter description" required></textarea>
          </div>
          <div class="form-group">
            <label for="photo">Attach Product Photo</label>
            <input type="file" class="form-control-file" id="photo" name="photo" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="FarmerDash.php" class="btn btn-primary">Cancel</a>
          <input type="reset" class="btn btn-primary"> </input>
        </form>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const form = document.querySelector(".product-form");

      form.addEventListener("submit", function(event) {
        const productName = document.getElementById("productName").value;
        const quantity = parseInt(document.getElementById("quantity").value);
        const price = parseInt(document.getElementById("price").value);
        const description = document.getElementById("description").value;
        const photo = document.getElementById("photo").value;
        const allowedExtensions = [".jpg", ".jpeg", ".png"];

        if (!productName || typeof productName !== "string") {
          alert("Invalid product name");
          event.preventDefault();
        }

        if (isNaN(quantity) || quantity <= 0) {
          alert("Invalid quantity (Quantity should be in kg format)");
          event.preventDefault();
        }

        if (isNaN(price) || price <= 0) {
          alert("Invalid price (Price should be in Rs. format)");
          event.preventDefault();
        }

        if (!description || typeof description !== "string") {
          alert("Invalid description");
          event.preventDefault();
        }

        const fileExtension = photo.slice(photo.lastIndexOf(".")).toLowerCase();
        if (!allowedExtensions.includes(fileExtension)) {
          alert("Invalid photo format. (Only .jpg or .jpeg or .png files are allowed.");
          event.preventDefault();
        }
      });
    });
  </script>
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>
