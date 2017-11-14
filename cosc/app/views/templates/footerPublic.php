<?php
require_once('../app/core/utils.php');

if (isset($_SESSION['auth']) == 1) {
    header('Location: /home');
}
?>
	 <p> attempts: <?=$data['message']?> </p>
  <div class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">about us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>this is our web pages examples</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Eimail Us</button>
        <Label type="button" class="btn btn-secondary" data-dismiss="modal">+1 (638)-725-7364</Label>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
</body>
</html>
