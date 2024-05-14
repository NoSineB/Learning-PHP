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
            <form action="" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="px-2 py-1 text-red-500 border-2 border-red-500 rounded-md hover:text-white hover:bg-red-500 duration-500">Delete</button>
            </form>
        </div>
    </div>

    
</main>


<?php require base_dir('views/partials/footer.php') ?>
