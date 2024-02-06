<?php view('partials/head.php') ?>
<?php view('partials/header.php') ?>
<?php view('partials/navbar.php') ?>


<div class="row align-content-center justify-content-center ">
    <div class="col-md-8">
        <form method="POST" action="/posts">
            <div class="form-group">
                <label for="post_title" class="h3 text-body-secondary"></label>
                <textarea class="form-control" id="post_title" placeholder="Title" name="post_title" style="resize:none" rows="1"><?= $_POST['post_title'] ?? '' ?></textarea>
                <?php if (isset($errors['post_title'])): ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <?= $errors['post_title'] ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="post_body"></label>
                <textarea class="form-control" id="post_body" name="post_body" style="resize:none" rows="7"><?= $_POST['post_body'] ?? '' ?></textarea>
                <?php if (isset($errors['post_body'])): ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <?= $errors['post_body'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="container d-flex justify-content-end">
            <button class="btn btn-outline-secondary mt-5 mb-2 me-2"><a class="link-secondary link-underline link-underline-opacity-0" href="/posts" >Cancel</a></button>
            <button type="submit" class="btn btn-secondary mt-5 mb-2 me-2">Publish</button>
            </div>
        </form>

  </div>
</div>


<?php view("partials/footer.php"); ?>