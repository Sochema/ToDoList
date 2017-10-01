<?php include("template/header.php"); ?>

<div class="addbutton btn">
  <a href="formcreate.php">ADD A PROJECT</a>
</div>

<?php

 foreach ($donnees as $key){

?>
<div class="container">

    <div class="card">
      <div class="banner"><?php echo $key['status']; ?></div>

      <div class="card-block">
        <h4 class="card-title"><?php echo $key['title']; ?></h4>
        <p class="description"><?php echo $key['description']; ?></p>
        <p class="date"><?php echo $key['date_project']; ?></p>
      </div>




      <div class="hoverclass">
        <a class="buylink" href="ficheproduit.php?value=<?php echo $key['ID']; ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
      </div>

    </div>
<?php

}

 ?>


<?php include("template/footer.php"); ?>
