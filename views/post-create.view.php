<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
   <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <div class="w-full max-w-sm">
         <form method="POST">
            <div>
               <label
                  for="title"
                  class="block text-sm/6 font-medium text-gray-900">
                  Title
               </label>
               <div class="mt-2">
                  <input
                     type="text"
                     name="title"
                     id="title"
                     value="<?= $_POST['title'] ?? '' ?>"
                     class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
               </div>
               <?php if (isset($errors['title'])) : ?>
                  <p class="text-red-500 text-xs mt-2">
                     <?= $errors['title'] ?>
                  </p>
               <?php endif; ?>
            </div>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 mt-3">
               Save
            </button>
         </form>
      </div>
   </div>
</main>

<?php require('partials/foot.php') ?>