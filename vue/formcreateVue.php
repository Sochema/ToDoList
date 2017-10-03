<?php include("template/header.php"); ?>
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
     <form class="" action="index.php" method="post">

       <div class="form-group">
         <p>Title:</p>
         <input type="text" name="title" value="">
      </div>
      <div class="form-group">
        <p>Deadline:</p>
        <input id="date" type="date" name="deadline">
      </div>
        <div class="form-group">
          <p>Status:</p>
          <input type="radio" name="status" value="ongoing" id="ongoing"/><label for="ongoing">On Going</label>
          <input type="radio" name="status" value="finished" id="finished"/><label for="finished">Finished</label>
        </div>
      <div class="form-group">
        <p>Description:</p>
        <input type="text" name="description" value="">
      </div>
      <div class="form-group">
        <input type="submit" name="send" value="Create Project">
      </div>
    </form>
    </div>
  </div>
</div>
</div>

<?php include("template/footer.php"); ?>
