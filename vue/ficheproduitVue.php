<?php include("template/header.php"); ?>

<div class="">

  <div class="">
    <h4 class="card-title"><?php echo $article['title']; ?></h4>
    <p class="description"><?php echo $article['description']; ?></p>
    <p class="date"><?php echo $article['date_project']; ?></p>
  </div>

  <div class="sous-etape">
    <h5>Sous-étape</h5>
    <div class="taches">
      <input type="radio" name="task" value="task" id="task"/><p>Tache</p>
    </div>
  </div>

</div>





<?php include("template/footer.php"); ?>
