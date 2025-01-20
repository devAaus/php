<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
   <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p class="mb-4">
         <a href="/posts" class="text-white bg-blue-600 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">Go Back</a>
      </p>
      <p><?= htmlspecialchars($post['title']) ?></p>
   </div>
</main>

<?php require base_path('views/partials/foot.php') ?>