<?php
  $title = 'World news';
  $posts = [
    ['title' => 'World news 1', 'author' => 'Pets', 'published' => '12.09.2025', 'body' => 'Some world news 1 body'],
    ['title' => 'World news 2', 'author' => 'Maali', 'published' => '11.09.2025', 'body' => 'Some world news 2 body'],
    ['title' => 'World news 3', 'author' => 'Annika', 'published' => '10.09.2025', 'body' => 'Some world news 3 body'],
    ['title' => 'World news 4', 'author' => 'Mats', 'published' => '09.09.2025', 'body' => 'Some world news 4 body'],
  ];
?>

<?php include __DIR__ . '/partials/header.php'; ?>
    <main class="container">
      <?php include __DIR__ . '/partials/hero.php'; ?>
      <?php include __DIR__ . '/partials/featured.php'; ?>
      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
