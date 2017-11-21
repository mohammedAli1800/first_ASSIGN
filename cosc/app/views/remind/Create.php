<?php require_once '../app/views/templates/header.php'?>

<h2>Create Reminder</h2>
<form action="/reminder/Create" method="post" >
        
            <div class="form-group">
      <label for="Subject">Subject</label>
      <input class="form-control" placeholder="Subject" type="text" name="Subject">
    </div>
    <div class="form-group">
      <label for="Description">Description</label>
      <input class="form-control" placeholder="Description" type="text" name="Description">
    </div>
    <button type="submit" name = "create" class="btn btn-primary">Create</button>
    </form>
    <?php require_once '../app/views/templates/footer.php'?>