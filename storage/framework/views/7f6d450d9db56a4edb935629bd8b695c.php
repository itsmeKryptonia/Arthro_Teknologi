<?php $__env->startSection('content'); ?>
    <main class="p-6 md:px-24 md:py-0 font-inter min-h-[85vh] flex flex-col justify-center">
        <div class="flex flex-col md:flex-row justify-between mb-8">
            <h1 class="font-epologue font-bold text-3xl">List Artikel</h1>
            <?php if(session('id') !== null): ?>
                <a href="<?php echo e(route('article.form')); ?>" class="bg-blue-500 text-base text-white py-2 px-5 rounded-md">Tambah
                    Article</a>
            <?php endif; ?>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-y-8 gap-x-6">
            <?php if(count($article) != 0): ?>
                <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('article.detail',1,2,3,4 )); ?>" class="border p-4 rounded-md">
                        <h2 class="font-semibold text-blue-500 mb-4"><?php echo e($item->title); ?></h2>
                        <p class="text-sm text-gray-500 mb-1"><?php echo e($item->created_at); ?></p>
                        <p class="text-sm text-gray-500"><?php echo e(Str::words($item->detail, 12)); ?></p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="w-full border border-gray-200 my-4"></div>
                <p class="text-center">Tidak ada artikel</p>
                <div class="w-full border border-gray-200 my-4"></div>
            <?php endif; ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tubes-tim-b-master\resources\views/halaman/list_article.blade.php ENDPATH**/ ?>