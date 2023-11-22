
<?php
include 'config.php';
$query ="SELECT * FROM `tb_note`";
$sql=mysqli_query($conn,$query);

// var_dump($result);
// die();
$no=0;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NotePad Web</title>
    <!-- link -->
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <style>
     body{
      background-color: #f1f1f1;
     }

    textarea {
    resize: none;
  }
  </style>
  <body>

    <div class="container">
        <h3 class="fw-semibold fst-italic mb-4 mt-3 yes "> <i class='bx bxs-book-bookmark' style='color:#4397f0'  ></i> NotePad</h3>


  <div class="card shadow bg-body-tertiary rounded mb-4 " >
    <div class="card-body">
        <form class="" action="insert.php" method="post">
            <input required class="form-control me-2" name="title_note" placeholder="Title of Note...">
            <textarea required class="form-control mt-2" id="exampleFormControlTextarea1" rows="6" no-resize name="note_note" placeholder="Write Here..."></textarea>
            <button aria-label="Okey👌" tooltip-position="top" class="btn btn-primary mt-2" type="submit" >
            <i class='bx bxs-message-square-add' ></i> Add
            </button>
        </form>
    </div> 
  </div>


      <?php
      while($result=mysqli_fetch_assoc($sql)){
        
      ?>

  <div class="card mt-3">
    <div class="card-header">
    <i class='bx bx-notepad'></i> Note #<?php echo ++$no;?>
    </div>
    <div class="card-body">
      <h5 class="card-title"><?php echo $result['title_note'];?></h5>
      <p class="card-text"><?php echo $result['note_note'];?></p>
      <a aria-label="✍️" tooltip-position="top" href="update.php?edit=<?php echo $result['id_note'];?>" class="btn btn-success btn-sm"><i class='bx bx-pencil' ></i> Edit</a>
      <a aria-label="🗑️🤨?" tooltip-position="top" href="delete.php?delete=<?php echo $result['id_note'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus?')"><i class='bx bxs-trash'></i> Delete</a>
    </div>
  </div>

  
      <?php }?>
 
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>