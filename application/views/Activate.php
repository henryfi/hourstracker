<?php include 'header.php' ?>

<div class="row" style="padding-top: 60px;">
  <div class="col-md-4 col-md-offset-4">
    <h1 class="page-header">Hello <?php echo $user->name; ?></h1>

    <p>Please fill in the following fields to activate your account.</p>

    
    <?php if( ! empty($errors)) : ?>
      <div class="alert alert-danger">
        <?php foreach ($errors as $message): ?>
          <?php echo $message; ?>
        <?php endforeach ?>
      </div>
    <?php endif; ?>
   

    <form role="form" method="post">
      <div class="form-group">		
        <label for="date">Username</label><br />
        <input type="text" class="form-control" name="username"value="<?php echo $user->username;?>" disabled>
      </div>
      <div class="form-group">    
        <label for="password">Password</label><br />
        <input type="password" class="form-control" name="password">
      </div>
      <div class="form-group">    
        <label for="password">Re-type password</label><br />
        <input type="password" class="form-control" name="confirm">
      </div>

      <button type="submit" class="btn btn-primary">Activate</button>
    </form>
  </div>
</div>

<?php include 'footer.php' ?>