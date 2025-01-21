<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
   <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p class="mb-4">
         <a href="/posts" class="text-white bg-blue-600 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">⬅️ Go Back</a>
      </p>

      <p class="uppercase my-4 font-bold text-2xl">
         <?= htmlspecialchars($post['title']) ?>
      </p>

      <p>
         <a href="/posts/edit?id=<?= $post['id'] ?>" class="text-white bg-green-600 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">✏️ Edit Post</a>
      </p>

      <form method="POST">
         <input type="hidden" name="_method" value="DELETE">
         <input type="hidden" name="id" value="<?= $post['id'] ?>">
         <button type="submit" class="text-white bg-red-600 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">🗑️ Delete Post</button>
      </form>
   </div>
   </div>
</main>

<?php require base_path('views/partials/foot.php') ?>