<h1 class="mb-5">Sign in</h1>

<form method="post" action="">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" value="<?php echo $model->email ?? '' ?>" class="form-control <?php echo $model->hasError('email') ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('email') ?>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" value="<?php echo $model->password ?? '' ?>" class="form-control <?php echo $model->hasError('password') ? 'is-invalid' : '' ?>" id="exampleInputPassword1" placeholder="Password">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('password') ?>
        </div>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>