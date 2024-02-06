<?php view('partials/head.php') ?>
<?php view('partials/header.php') ?>
<?php view('partials/navbar.php') ?>


<div class="row align-content-center justify-content-center ">
    <div class="col-md-10">
        <article class="pb-4 mb-4 border-dark-subtle border-bottom">
            <h2 class="display-5 link-body-emphasis mb-1"><a href="/post?id=<?= $post['id'] ?>" class="link-dark link-underline link-underline-opacity-0"><?= $post['post_title'] ?></a></h2>
            <p class="pb-2 border-bottom text-secondary"><?= $post['create_time']?> by <a class="link-secondary link-underline link-underline-opacity-0" href="#"><?= $post['author_name'] ?></a></p>
            <p><?= html_entity_decode($post['post_body']) ?></p>
        </article>

    <?php if ($authorize): ?>
        <div class="container">
            <div class="d-flex justify-content-end align-items-center">
                <div class="col-1">
                <form method="POST" >
                    <input type="hidden" name="_method" value="DELETE" />
                    <button class="btn btn-md btn-danger">
                        Delete
                    </button>
                </form>
                </div>
                <div class="col-1 pe-4">
                <button class="btn btn-md btn-secondary">
                    <a class="text-white link-underline link-underline-opacity-0 " href="/post/edit?id=<?= $post['id'] ?>">Edit</a>
                </button>
                </div>
            </div>
        </div>
        <?php endif; ?>
  </div>
</div>


<?php view("partials/footer.php"); ?>