<?php $__env->startSection('content'); ?>
    <main class="p-6 md:px-24 md:py-0 font-inter min-h-[85vh] flex flex-col justify-center">
        <h1 class="font-epologue font-bold text-3xl mb-4">Detail Article</h1>
        <div class="my-4">
            <div class="grid grid-cols-2 w-40 mb-4">
                <h3 class=" flex gap-2"><img src="<?php echo e(asset('assets/img/user-regular.svg')); ?>" alt="icon">Owner</h3>
                <h3 class=" flex gap-2"><img class="p-0.5 bg-blue-400 rounded-full w-24"
                        src="<?php echo e(asset('assets/img/user-profile.png')); ?>" alt="profile"><?php echo e($user->name); ?></h3>
            </div>
            <div class="grid grid-cols-2 w-40">
                <h3 class="flex gap-2"><img src="<?php echo e(asset('assets/img/calendar-regular.svg')); ?>" alt="icon">Date</h3>
                <h3><?php echo e($article->created_at); ?></h3>
            </div>
        </div>
        <div class="w-full border border-gray-200 my-4"></div>
        <div class="my-4">
            <h2 class="font-epologue font-semibold mb-4 text-base">ATTACHMENTS</h2>
            <?php $__currentLoopData = $article->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('download', $attachment)); ?>" class=" flex gap-2 text-blue-500 font-semibold"><img
                        src="<?php echo e(asset('assets/img/paperclip-solid.svg')); ?>" alt="icon">Download Attachment
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="w-full border border-gray-200 my-4"></div>
        <h3 class="font-epologue font-semibold mb-4 text-base block">DESCRIPTION</h3>
        <div class="">
            <p>
                <?php echo e($article->detail); ?>

            </p>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tubes-tim-b-master\resources\views/halaman/detail_article.blade.php ENDPATH**/ ?>