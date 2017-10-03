<?php include("template/header.php"); ?>
<div class="container-fluid">
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <h4 class="card-title"><?php echo $article['title']; ?></h4>
    <p id="description"><?php echo $article['description']; ?></p>
    <p id="date">Date : <?php echo $article['date_project']; ?></p>
    <p id="deadline">Deadline : <?php echo $article['deadline']; ?></p>

    <div class="">
      <form class="delete" action="index.php" method="get">
        <input type="submit" name="delete" value="Delete">
      </form>
    </div>
  </div>

  <div class="sous-etape col-md-6 col-sm-6 col-xs-12">
  <?php
  foreach ($steps as $etapes){
  ?>
    <h5><?php echo $etapes['step']; ?></h5>
    <h6></h6>
    <div class="sous-etape col-md-3 col-sm-3 col-xs-12">
      <form class="" action="ficheproduit.php?value=<?php echo $_GET['value']; ?>" method="post">
        <div class="form-group">
          <label for="task"></label>
          <input name="task" type="text" class="form-control" id="task" aria-describedby="Task" placeholder="Task">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Add a task</button>
        </div>
      </form>
    </div>

<?php
}
 ?>

  <form class="" action="ficheproduit.php?value=<?php echo $_GET['value']; ?>" method="post">
    <div class="form-group">
      <label for="step"></label>
      <input name="steps" type="text" class="form-control" id="step" aria-describedby="Steps" placeholder="Steps">
      <input type="hidden" name="id_step" value="<?php echo $etapes['ID']; ?>">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Add a step</button>
    </div>
  </form>


  </div>




  </div>

</div>

</div>




<?php include("template/footer.php"); ?>
