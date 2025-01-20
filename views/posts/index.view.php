<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
   <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p class="mb-4">
         <a href="/posts/create" class="text-white bg-blue-600 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">Create Post</a>
      </p>
      <h2 class="text-2xl font-bold">All Posts</h2>
      <ul class="flex flex-col gap-2">
         <?php foreach ($posts as $post) : ?>
            <li>
               <a href="/post?id=<?= $post['id'] ?>" class="px-3 py-2 shadow-md rounded-xl hover:shadow-xl inline-flex">
                  <?= htmlspecialchars($post['title']) ?>
               </a>
            </li>
         <?php endforeach; ?>
      </ul>


   </div>
</main>

<?php require base_path('views/partials/foot.php') ?>