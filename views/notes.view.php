<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
        <?php endforeach; ?>

        <div class="mt-6">
            <a href="/note-create" class="px-2 py-1 text-blue-500 border-2 border-blue-500 rounded-md hover:text-white hover:bg-blue-500 duration-500">Add Note</a>
        </div>
    </div>
    
</main>

<?php require('partials/footer.php') ?>
