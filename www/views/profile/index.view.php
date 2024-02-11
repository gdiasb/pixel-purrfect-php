<?php view('partials/head.php') ?>
<?php view('partials/header.php') ?>
<?php view('partials/navbar.php') ?>


<form class="container bg-white bg-opacity-50 rounded">
    <div class="row g-3 mt-5 ms-5">
        <div class="col-4 mt-5">
            <div class="input-group">
                <div class="input-group-text">@</div>
                <input
                    type="text"
                    class="form-control"
                    placeholder="<?= $user['username'] ?>"
                    disabled
                />
            </div>
        </div>
        <div class="col-4 mt-5">
            <div class="input-group">
                <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $user['name'] ?? '' ?>" disabled />
            </div>
        </div>
    </div>
    <div class="row mt-3 ms-5 mb-5">
    <div class="col-6 mb-5">
        <input type="email" class="form-control" name="email" placeholder="<?= $user['email'] ?>" disabled />
    </div>
    <div class="col">
        <a class="btn btn-secondary ms-5 ps-3 pe-3" href="/profile/edit">Edit profile</a>
    </div>
    </div>
</form>
<div class="">
    <h1 class="border-bottom border-1 border-secondary-subtle mb-5">My posts</h1>

    <div>
    <?php foreach(array_reverse($my_posts) as $post): ?>
        <article class="pb-4 mb-4 border-dark-subtle border-bottom">
            <h2 class="link-body-emphasis mt-5 mb-1">
                <a href="/post?id=<?= $post['id'] ?>" class="link-dark link-underline link-underline-opacity-0"><?= $post['post_title'] ?></a>
                <a class="btn btn-secondary ms-4 btn-sm" href="/post/edit?id=<?= $post['id'] ?>" data-bs-toggle="tooltip" data-bs-title="Edit post"><i class="bi-pencil"></i></a></h2>

            <p class="pb-2 border-bottom text-secondary"><?= $post['create_time']?></p>
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