<div class="nav-scroller py-1 mb-5 border-bottom border-dark-subtle">
    <nav class="nav nav-underline justify-content-center">
      <a class="nav-item nav-link link-body-emphasis <?= urlIs('/') ? 'active' : '' ?>" href="/">Home</a>
      <a class="nav-item nav-link link-body-emphasis <?= urlIs('/about') ? 'active' : '' ?>" href="/about">About</a>
      <a class="nav-item nav-link link-body-emphasis <?= urlIs('/posts') ? 'active' : '' ?>" href="/posts">Posts</a>
      <?php if ($_SESSION['user'] ?? false ): ?>
        <a class="nav-item nav-link link-body-emphasis <?= urlIs('/post/create') ? 'active' : '' ?>" href="/post/create">Create Post</a>
      <?php endif; ?>
    </nav>
  </div>
