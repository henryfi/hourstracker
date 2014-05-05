<?php include 'header.php' ?>

<div class="row" style="padding-top: 60px;">
  <div class="col-md-4 col-md-offset-4">
    <h1 class="page-header">Login</h1>

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
        <input type="text" class="form-control" id="username" name="username" ng-model="username" ng-required="true">
      </div>
      <div class="form-group">    
        <label for="password">Password</label><br />
        <input type="password" class="form-control" id="password" name="password" ng-model="password" ng-required="true">
      </div>

      <button type="submit" class="btn btn-primary btn-lg">Login</button>
    </form>

  </div>
</div>

<?php include 'footer.php' ?>