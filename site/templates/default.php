<?php snippet('header') ?>

  <main class="default-page | main" id="maincontent">
    <article class="wrap">
      <?php snippet('hero', ['align' => 'center']) ?>
      <div class="text">
        <?= $page->text()->kt()->anchorHeadlines() ?>
      </div>
    </article>
  </main>

<?php snippet('footer') ?>
