<?php require base_dir('views/partials/head.php') ?>
<?php require base_dir('views/partials/nav.php') ?>
<?php require base_dir('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="/notes" class="flex flex-col" method="POST">
            <div class="mb-4">
                <label for="body">Body</label>
            </div>
            <div class="mb-2">
                <textarea 
                    name="body" 
                    id="body" 
                    cols="100" 
                    rows="5" 
                    class="p-2" 
                    placeholder="Enter the body of the note ....." 
                ><?= $_POST['body'] ?? '' ?></textarea>
            </div>
            <div class="mb-2 text-xs">
                <p class="text-red-500"><?= $errors["body"] ?? '' ?></p>
            </div>
            <div class="mt-2">
                <button type="submit" class="px-2 py-1 text-green-500 border-2 border-green-500 rounded-md hover:text-white hover:bg-green-500 duration-500">Submit</button>
            </div>
        </form>
        
    </div>
</main>

<?php require base_dir('views/partials/footer.php') ?>