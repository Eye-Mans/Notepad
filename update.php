
<?php
include 'config.php';
$id=$_GET['edit'];
$query ="SELECT * FROM tb_note WHERE id_note='$id'";
$sql=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($sql);

// var_dump($result);
// die();

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

    textarea {
    resize: none;
  }
  </style>
  <body>

    <div class="container" id="up">
        <h3 class="fw-semibold fst-italic mb-4 mt-3 yes "> <i class='bx bxs-book-bookmark' style='color:#4397f0'  ></i> EDIT This Note</h3>


<div class="card shadow bg-body-tertiary rounded mb-4" >
    <div class="card-body">
        <form class="" action="updateupdate.php" method="post">
            <input class="form-control me-2" name="title_note" placeholder="Title..."  value="<?php echo $result['title_note']?>">
            <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="20" no-resize name="note_note" placeholder="<?php echo $result['note_note']?>"></textarea>
            <input type="hidden" name="id" value="<?php echo $result['id_note']?>">
            <button aria-label="✍️" tooltip-position="top" class="btn btn-success btn-lg mt-2" type="submit">
            <i class='bx bx-pencil' ></i> Edit
            </button>
        </form>
    </div> 
  </div>

   
      
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>