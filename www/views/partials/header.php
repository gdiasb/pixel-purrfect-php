<div class="container">
  <header class="border-bottom border-dark-subtle lh-1 pt-4">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <?php if ($_SESSION['user'] ?? false ): ?>
        <?php else: ?>
          <a class="link-secondary" href="/login">Login</a>
        <?php endif; ?>
      </div>
      <div class="col-4 d-flex justify-content-center text-center">
        <a href="/"><img src="https://i.pixelspeechbubble.com/fnDoo45u/pixel-speech-bubble.png" width="60%"/>
      <img src="https://i.postimg.cc/nL63gQDX/pngwing-com-3.png" width="25%" /></a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <?php if ($_SESSION['user'] ?? false) : ?>
          <div class="dropdown">
            <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hi, <?= $_SESSION['user']['name'] ?? $_SESSION['user']['username'] ?>!
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/profile">Profile</a></li>
              <li><a class="dropdown-item" href="/post/create">Create Post</a></li>
              <li><hr class="dropdown-divider"></li>
              <form method="POST" action="/session">
                <input type="hidden" name="_method" value="DELETE" />
                <button class="btn dropdown-item">Logout</button>
              </form>
            </ul>
          </div>
        <?php else : ?>
          <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
        <?php endif; ?>
      </div>
    </div>
  </header>