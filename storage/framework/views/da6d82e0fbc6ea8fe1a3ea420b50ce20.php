<header class="bg-white border-b-2 flex items-center justify-between p-4">
    
    <div>
        logo
    </div>

    
    <div class="flex items-center gap-2">
        <span>github</span>

        <?php if(auth()->guard()->check()): ?>
            <form action="<?php echo e(route('auth.logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="bg-white p-2 border-2">
                    Sair
                </button>
            </form>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('site.login')); ?>" class="bg-white p-2 border-2">
                Login
            </a>
        <?php endif; ?>
    </div>
</header>
<?php /**PATH C:\Users\Almir\first-project\resources\views/components/header.blade.php ENDPATH**/ ?>