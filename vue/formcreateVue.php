<?php include("template/header.php"); ?>

<form class="" action="" method="post">

<p>Title:</p>
<input type="text" name="title" value="">
<p>Status:</p>
<input type="radio" name="status" value="ongoing" id="ongoing"/><label for="ongoing">On Going</label>
<input type="radio" name="status" value="finished" id="finished"/><label for="finished">Finished</label>
<p>Description:</p>
<input type="text" name="description" value="">
<input type="submit" name="send" value="Create Project">

</form>


<?php include("template/footer.php"); ?>
