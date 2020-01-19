
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form action="upload.php" method="POST" enctype="multipart/form-data">
  <table>
  <div class="form-group">
   
   <label for="firstname">First Name:</label>
    <input type="text" name="username" required class="form-control">
   
   </div>
   <div class="form-group">
    <label for="lastname">Last Name :</label>
    <input type="text" name="password" required class="form-control">
</div>
  
<div class="form-group">
  
    <label for="email">Email :</label>
    <input type="email" name="email" required class="form-control">
    
</div>
   <div class="form-group">
    <label for="phoneno">Phone no :</label>
    <td>
     <select name="phoneCode" required class="form-control">
       <h2>Contact No</h2>
      <option selected hidden value="">Select Code</option>
      <option value="977">011</option>
      <option value="978">034</option>
      <option value="979">035</option>
      <option value="973">077</option>
      <option value="972">071</option>
      <option value="974">078</option>
     </select>
     <input type="phone" name="phone" required class="form-control">
    </td>
   </tr>
</div>

<div class="form-group">
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
</div>
   <tr>
     <td>
     <span>Upload Your CV:</span>
      <input type="file" name="uploadedFile" />

     </td>
   </tr>
   <tr>
    <td><input type="submit" name="uploadBtn" value="Upload" /></td>
   </tr>
  </table>
 </form>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>

    
  </form>
  </div>
</body>
</html>
