<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
   <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <?php foreach ($posts as $post) : ?>
         <li>
            <a href="/post?id=<?= $post['id'] ?>" class="hover:text-blue-500">
               <?= $post['title'] ?>
            </a>
         </li>
      <?php endforeach; ?>
   </div>
</main>

<?php require('partials/foot.php') ?>