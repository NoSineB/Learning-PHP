<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="" class="flex flex-col" method="POST">
            <div class="mb-4">
                <label for="body">Description</label>
            </div>
            <div class="mb-4">
                <textarea name="body" id="body" cols="100" rows="5" class="p-2"></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="px-2 py-1 text-green-500 border-2 border-green-500 rounded-md hover:text-white hover:bg-green-500 duration-500">Submit</button>
            </div>
        </form>
    </div>
</main>

<?php require('partials/footer.php') ?>