
<!DOCTYPE html>
<html>
<head>
  <title>Upload Files</title>
  <style>
    body {
      background: rgba(228, 228, 228, 0.9);
    }
    form {
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: -100px;
      margin-left: -250px;
      width: 500px;
      height: 200px;
      border: 4px dashed #000000;
    }
    form p {
      width: 100%;
      height: 100%;
      text-align: center;
      line-height: 170px;
      color: black;
      font-family: Arial;
    }
    form input {
      position: absolute;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      outline: none;
      opacity: 0;
    }
    form button {
      margin: 0;
      color: #fff;
      background: #090135;
      border: none;
      width: 508px;
      height: 35px;
      margin-top: -20px;
      margin-left: -4px;
      border-radius: 4px;
      border-bottom: 4px solid #090135;
      transition: all .2s ease;
      outline: none;
    }
    form button:hover {
      background: #0e1279;
      color: #e5e5e5;
    }
    form button:active {
      border: 0;
    }
  </style>
</head>
<body>
  <form action="upload.php" method="POST">
    <input type="file" multiple>
    <p>Drag your files here or click in this area.</p>
    <button type="submit">Upload</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function(){
      $('form input').change(function () {
        $('form p').text(this.files.length + " file(s) selected");
      });
    });
  </script>
</body>

</html>
