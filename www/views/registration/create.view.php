<?php view('partials/head.php') ?>
<?php view('partials/header.php') ?>
<?php view('partials/navbar.php') ?>


<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-6 d-flex justify-content-end ">
      <img src="https://i.postimg.cc/nz0S9Bqw/join-community.png" width="70%" />
    </div>
    <div class="col-4">
      <form class="mt-4" method="POST">
        <div class="mb-4">
          <input type="text" name="username" id="username" class="form-control focus-ring focus-ring-secondary bg-light border border-0" placeholder="Username" value="<?= old('username') ?>" />
          <?php if (isset($errors['username'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $errors['username'] ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="mb-4">
          <input type="email" name="email" id="email" class="form-control focus-ring focus-ring-secondary bg-light border border-0" placeholder="Email" value="<?= old('email') ?>" required/>
          <?php if (isset($errors['email'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $errors['email'] ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="mb-4">
          <input type="password" name="password" id="password" class="form-control focus-ring focus-ring-secondary bg-light border border-0" placeholder="Password" required/>
          <?php if (isset($errors['password'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $errors['password'] ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="mb-4">
          <input type="password" name="check_password" id="check_password" class="form-control focus-ring focus-ring-secondary bg-light border border-0" placeholder="Repeat your password" required/>
          <?php if (isset($errors['check_password'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $errors['check_password'] ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <button class="btn btn-outline-secondary btn-md mt-3 me-2">
            <a class="link-underline link-underline-opacity-0" href="/">Cancel</a>
          </button>
          <button type="submit" class="btn btn-secondary btn-md mt-3">Sign up</button>
        </div>
      </form>
    </div>
    <div class="col-6">
      <p class="lead">Already a cat lover? Sign in <a class="text-body-emphasis" href="/login">here!</a></p>
    </div>
  </div>
</div>



<?php view('partials/footer.php') ?>