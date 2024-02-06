<?php view('partials/head.php') ?>
<?php view('partials/header.php') ?>
<?php view('partials/navbar.php') ?>


<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-4 justify-content-center ">
    <img class="ms-5" src="https://i.postimg.cc/pTdsDyWG/hi-human.png" width="60%"/>

      <form class="" method="POST" action="/session">
        <div class="mb-4">
          <input type="email" name="email" id="email" class="form-control focus-ring focus-ring-secondary bg-light border border-0" placeholder="Email" required/>
          <?php if ($_POST && isset($errors['email'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $errors['email'] ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="mb-4">
          <input type="password" name="password" id="password" class="form-control focus-ring focus-ring-secondary bg-light border border-0" placeholder="Password"/>
          <?php if ($_POST && isset($errors['password'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $errors['password'] ?>
            </div>
          <?php endif; ?>
        </div>


        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <button type="submit" class="btn btn-secondary btn-md mt-3">Sign in</button>
        </div>
      </form>
    </div>
</div>

<?php view('partials/footer.php') ?>