<?php require base_dir('views/partials/head.php') ?>
<?php require base_dir('views/partials/nav.php') ?>
<?php require base_dir('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($note['body']) ?></p>
 
        <div class="mt-6">
            <a href="/note/edit?id=<?= $note['id'] ?>" class="px-2 py-1 text-blue-500 border-2 border-blue-500 rounded-md hover:text-white hover:bg-blue-500 duration-500">Edit</a>
        </div>
    </div>

    
</main>


<?php require base_dir('views/partials/footer.php') ?>
