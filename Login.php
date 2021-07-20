<!DOCTYPE html>
<html lang="en">
<head>
  <title>Throttler</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login Form</h2>
  <div class="row">
    <div class="col-sm-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Login Form</div>
            <div class="panel-body">

                <?php
                    if(session()->has("error")){
                        ?>
                        <div class="alert alert-danger">
                            <?= session("error") ?>
                        </div>
                        <?php
                    }
                ?>

                <form class="form-horizontal" action="<?= base_url('validate-user') ?>" method="post">

                    <input type="hidden" name="<?=csrf_token()?>" value="<?=csrf_hash()?>" />

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    </div>
  </div>
</div>

</body>
</html>
