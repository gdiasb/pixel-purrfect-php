<?php view('partials/head.php') ?>
<?php view('partials/header.php') ?>
<?php view('partials/navbar.php') ?>


<form class=" container ms-5 bg-white bg-opacity-50 rounded">
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

<?php view('partials/footer.php') ?>