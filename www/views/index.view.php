<?php view('partials/head.php') ?>
<?php view('partials/header.php') ?>
<?php view('partials/navbar.php') ?>

<div class="p-5 text-center bg-image align-items-center rounded-3" style="
    background-image: url('https://cats.com/wp-content/themes/ribosome/img/about/about-hero.png');
    background-size: cover;
  ">
  <div class="mask rounded align-items-center" style="
    background-color: rgba(255, 255, 255, 0.3);
  ">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-black">
        <h1 class="mb-3">Every cat deserves a home</h1>
        <h4 class="mb-3">A curated list of shelters and group rescuers to find your catmate today!</h4>
        <a class="btn btn-outline-dark btn-lg" href="#!" role="button">Adopt</a>
      </div>
    </div>
  </div>
</div>
<div class="container px-4 py-5">
  <h2 class="pb-2 border-bottom">Latest posts</h2>
  <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
    <?php foreach ($posts as $post): ?>
      <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 border-bottom border-secondary-subtle ">
        <div class="mb-2 bg-gradient border-5 me-2 rounded ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 5 100 100" fill="none" x="0px" y="0px"><path fill-rule="evenodd" clip-rule="evenodd" d="M38.7399 17.5266L36.0567 17.2769C35.719 17.2455 35.3759 17.2294 35.028 17.2294C28.9662 17.2294 24 22.1895 24 28.3729C24 32.3572 26.0649 35.8456 29.1729 37.8184L31.5883 39.3516L30.9178 42.1329C29.9556 46.1244 30.8013 50.4511 33.4228 53.8033L34.4632 55.1335L34.2354 56.8069L33.1202 65H54C55.1046 65 56 65.8954 56 67C56 68.1046 55.1046 69 54 69H32.5758L30.8063 82H41C42.1046 82 43 82.8954 43 84C43 85.1046 42.1046 86 41 86H30.2619L29.5813 91L69.5408 91L68.2327 78.9866C68.1563 78.9955 68.0787 79 68 79H46C44.8954 79 44 78.1046 44 77C44 75.8954 44.8954 75 46 75H67.7986L65.7993 56.639L65.6244 55.0329L66.614 53.7558C69.2065 50.4105 70.0398 46.1056 69.0821 42.133L68.4116 39.3517L70.8271 37.8184C73.9351 35.8456 76 32.3572 76 28.3729C76 22.1895 71.0338 17.2294 64.972 17.2294C64.6241 17.2294 64.2809 17.2455 63.9432 17.2769L61.26 17.5266L60.0207 15.1338C58.1225 11.4689 54.3356 9 49.9999 9C45.6642 9 41.8774 11.4689 39.9792 15.1338L38.7399 17.5266ZM72.9707 41.1955C74.2031 46.3077 73.1381 51.8673 69.7758 56.206L73.5173 90.567C73.775 92.9335 71.9213 95 69.5408 95H29.5813C27.1578 95 25.291 92.8619 25.6179 90.4605L30.2719 56.2674C26.8719 51.9198 25.791 46.3318 27.0292 41.1955C22.806 38.5148 20 33.774 20 28.3729C20 20.0093 26.7283 13.2294 35.028 13.2294C35.4998 13.2294 35.9666 13.2513 36.4273 13.2941C38.9803 8.36493 44.1002 5 49.9999 5C55.8997 5 61.0196 8.36493 63.5726 13.2942C64.0333 13.2513 64.5001 13.2294 64.972 13.2294C73.2717 13.2294 80 20.0093 80 28.3729C80 33.7741 77.1939 38.5148 72.9707 41.1955ZM57.0743 21.8862C57.0743 25.6893 53.9913 28.7723 50.1881 28.7723C46.385 28.7723 43.302 25.6893 43.302 21.8862C43.302 18.083 46.385 15 50.1881 15C53.9913 15 57.0743 18.083 57.0743 21.8862ZM42.2426 29.5669C42.2426 33.2237 39.2781 36.1882 35.6213 36.1882C31.9645 36.1882 29 33.2237 29 29.5669C29 25.91 31.9645 22.9456 35.6213 22.9456C39.2781 22.9456 42.2426 25.91 42.2426 29.5669ZM64.7551 36.1882C68.4119 36.1882 71.3764 33.2237 71.3764 29.5669C71.3764 25.91 68.4119 22.9456 64.7551 22.9456C61.0982 22.9456 58.1338 25.91 58.1338 29.5669C58.1338 33.2237 61.0982 36.1882 64.7551 36.1882ZM37.9982 52.3584C34.4761 48.8363 34.4761 43.1259 37.9982 39.6038L39.5716 38.0303C39.6841 37.8741 39.8107 37.7248 39.9512 37.5843L41.888 35.6475C44.1797 33.3558 47.186 32.2144 50.1896 32.2232C53.1922 32.2151 56.1974 33.3565 58.4883 35.6475L60.4251 37.5843C60.5656 37.7248 60.6921 37.874 60.8046 38.0302L62.3782 39.6038C65.9003 43.1259 65.9003 48.8363 62.3782 52.3584C59.0386 55.698 53.7317 55.8711 50.1882 52.8777C46.6447 55.8711 41.3377 55.698 37.9982 52.3584Z" fill="black"/></svg> 
        </div>
        <a href="/post?id=<?= $post['id']?>" class="link-underline link-underline-opacity-0" ><h3 class="fs-2 text-body-emphasis"><?= $post['post_title'] ?></h3></a>
      </div>
      <?php if ( str_word_count($post['post_body'], 0) > 500 ? true : false): ?>
            <p><? echo htmlspecialchars_decode(substr($post['post_body'], 0, 500)) ?>...</p>
            <a href="/post?id=<?= $post['id']?>" class="link-dark"><i>Read more</i></a>
          <?php else: ?>
            <p><?= htmlspecialchars_decode($post['post_body']) ?></p>
          <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>
</div>


<?php view("partials/footer.php"); ?>