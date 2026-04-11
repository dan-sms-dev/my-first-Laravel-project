<header class="bg-white border-b-2 flex items-center justify-between p-4">
    
    <a href="<?php echo e(route('habits.index')); ?>" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-blue">
        HT
    </a>

    <div class="flex items-center gap-4">
        
        <a href="https://github.com/dan-sms-dev" target="_blank" rel="noopener noreferrer"
            class="flex gap-1 px-2 py-1 habit-btn habit-shadow-lg">
            <?php if (isset($component)) { $__componentOriginala3f20daecaa04c09a7cf018162601d50 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3f20daecaa04c09a7cf018162601d50 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.git','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.git'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala3f20daecaa04c09a7cf018162601d50)): ?>
<?php $attributes = $__attributesOriginala3f20daecaa04c09a7cf018162601d50; ?>
<?php unset($__attributesOriginala3f20daecaa04c09a7cf018162601d50); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3f20daecaa04c09a7cf018162601d50)): ?>
<?php $component = $__componentOriginala3f20daecaa04c09a7cf018162601d50; ?>
<?php unset($__componentOriginala3f20daecaa04c09a7cf018162601d50); ?>
<?php endif; ?>
        </a>

        <?php if(auth()->guard()->check()): ?>
            <form action="<?php echo e(route('auth.logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="habit-btn habit-shadow-lg  p-2 border-2">
                    Sair
                </button>
            </form>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
        <div class="flex gap-2">
            <a href="<?php echo e(route('site.register')); ?>" class="p-2 habit-btn habit-shadow-lg">
                Cadastrar-se
            </a>

            <a href="<?php echo e(route('site.login')); ?>" class="p-2 habit-btn habit-shadow-lg bg-habit-blue">
                Logar
            </a>
        </div>
        <?php endif; ?>
    </div>
</header>
<?php /**PATH C:\Users\Almir\first-project\resources\views/components/header.blade.php ENDPATH**/ ?>