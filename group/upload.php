<style>
html {
    background-color: #595959;
}
  form {
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f7f7f7;
    width: 400px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="number"],
  textarea,
  select {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #3e8e41;
  }

  #fileToUpload {
    margin-top: 10px;
  }


  .big-image {
    width: 100%;
    height: 300px;
    object-fit: cover;
  }

  .small-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }


  .image-container {
    display: flex;
    margin-top: 10px;
    justify-content: space-between;
  }

  .image-container > div {
    flex-basis: 33.33%;
    margin-right: 10px;
  }
</style>
<!DOCTYPE html>

<head>
    <title>Upload page</title>
  
</head>
<html>

<h3>Upload Item</h3>

<div style="display: flex; justify-content: space-between;">
  <div style="flex-basis: 60%">
    <img src="big-image.jpg" alt="Big Image" class="big-image">
    <div class="image-container">
      <div>
        <img src="small-image1.jpg" alt="Small Image 1" class="small-image">
      </div>
      <div>
        <img src="small-image2.jpg" alt="Small Image 2" class="small-image">
      </div>
      <div>
        <img src="small-image3.jpg" alt="Small Image 3" class="small-image">
      </div>
    </div>
  </div>
  <form action="upload.php" method="post" enctype="multipart/form-data">
  <div>
    <label for="fileToUpload">Select an image to upload:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
  </div>
  <div>
    <label for="category">Category:</label>
    <select name="category" id="category">
      <option value="1">Category 1</option>
      <option value="2">Category 2</option>
      <option value="3">Category 3</option>
      <option value="4">Category 4</option>
    </select>
  </div>
  <div>
    <label for="itemName">Item Name:</label>
    <input type="text" name="itemName" id="itemName">
  </div>
  <div>
    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>
  </div>
  <div>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity">
  </div>
  <div>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01">
  </div>
  <div>
    <input type="submit" value="Upload Item" name="submit">
  </div>
</form>
</div>
    
    
</main>

</body>
</html>