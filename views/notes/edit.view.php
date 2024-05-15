<?php require base_dir('views/partials/head.php') ?>
<?php require base_dir('views/partials/nav.php') ?>
<?php require base_dir('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="/note" class="flex flex-col" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <div class="mb-4">
                <label for="body">Body</label>
            </div>
            <div class="mb-2">
                <textarea name="body" id="body" cols="100" rows="5" class="p-2" placeholder="Enter the body of the note ....."><?= $note['body'] ?></textarea>
            </div>
            <div class="mb-2 text-xs">
                <p class="text-red-500"><?= $errors["body"] ?? '' ?></p>
            </div>
            <div class="flex justify-start">
                <div class="mt-2">
                    <a href="/note?id=<?= $note['id'] ?>" class="px-2 py-1 text-gray-500 border-2 border-gray-500 rounded-md hover:text-white hover:bg-gray-500 duration-500">Cancel</a>
                </div>
                <div class="ms-2">
                    <button type="submit" class="px-2 py-1 text-green-500 border-2 border-green-500 rounded-md hover:text-white hover:bg-green-500 duration-500">Update</button>
                </div>
            </div>
        </form>
        <div class="mt-6">
            <form action="/notes" method="POST" class="me-2">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="px-2 py-1 text-red-500 border-2 border-red-500 rounded-md hover:text-white hover:bg-red-500 duration-500">Delete</button>
            </form>
        </div>
    </div>
</main>

<?php require base_dir('views/partials/footer.php') ?>