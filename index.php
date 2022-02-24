<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <link rel="icon" href="dk.png">
  <title>Dewan Upload &amp; Resize Ajax</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand text-white" href="index.php">
      Dewan Komputer
    </a>
  </nav>

  <div class="container">  
    <h3 align="center" class="mb-3 mt-3">Dewan Upload &amp; Resize/Compress Gambar dengan Ajax</h3>

    <form method="post" id="upload_image" enctype="multipart/form-data">
      <label>Select File</label>
      <input type="file" name="image_upload" id="image_upload" class="form-control" />
      <input type="submit" name="upload" id="upload" class="btn btn-info mt-5" value="Upload" />
    </form>

    <div id="preview"></div>  
  </div>

  <div class="fixed-bottom text-center">© <?php echo date('Y'); ?> Copyright:
    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
  </div>

  <script>
    $(document).ready(function(){
      $('#upload_image').on('submit', function(event){
        event.preventDefault();
        $.ajax({
          url:"upload.php",
          method:"POST",
          data:new FormData(this),
          contentType:false,
          cache:false,
          processData:false,
          success:function(data){
            $('#preview').html(data);
          }
        })
      });
    });
  </script>

</body>
</html>

