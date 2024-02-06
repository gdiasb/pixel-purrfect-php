<?php view('partials/head.php') ?>
<?php view('partials/header.php') ?>
<?php view('partials/navbar.php') ?>


  <div class="row align-content-center justify-content-center ">
    <div class="col-md-10">

        <?php foreach(array_reverse($posts) as $post): ?>
        <article class="pb-4 mb-4 border-dark-subtle border-bottom">
            <h2 class="display-5 link-body-emphasis mb-1"><a href="/post?id=<?= $post['id'] ?>" class="link-dark link-underline link-underline-opacity-0"><?= $post['post_title'] ?></a></h2>
            <p class="pb-2 border-bottom text-secondary"><?= $post['create_time']?> by <a class="link-secondary link-underline link-underline-opacity-0" href="#"><?= $post['author_name'] ?></a></p>
            <?php if ( str_word_count($post['post_body'], 0) > 500 ? true : false): ?>
              <p><? echo htmlspecialchars_decode(substr($post['post_body'], 0, 500)) ?>...</p>
              <a href="/post?id=<?= $post['id']?>" class="link-dark"><i>Read more</i></a>
            <?php else: ?>
              <p><?= htmlspecialchars_decode($post['post_body']) ?></p>
            <?php endif; ?>
        </article>
        <?php endforeach; ?>
  </div>
</div>

<?php view('partials/footer.php') ?>