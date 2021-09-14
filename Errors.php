<?php  if (count($errors)> 0) : ?>
  <div class="alert alert-danger display-5 font-weight-bold text-center text-body  ">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>