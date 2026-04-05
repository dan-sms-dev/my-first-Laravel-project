<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <main class="py-10">
        <h1>
            Dashboard
        </h1>

        <p>
            Bem-vindo(a), <?php echo e(auth()->user()->name); ?>!
        </p>

        <div>
            <h2 class="text-x1 mt-4">
                Listagem dos seus hábitos:
            </h2>

            <ul class="flex flex-col grap-2">
                <?php $__empty_1 = true; $__currentLoopData = $habits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="pl-4">
                      <div class="flex gap-2 items-center">
                        <p class="font-bold text-xl">
                            - <?php echo e($item->name); ?>

                        </p>
                        <p>
                          [<?php echo e($item->habitLogs()->count()); ?> registros]
                        </p>
                      </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>
                      Ainda não há hábitos cadastrados.
                    </p>
                    <a href="/habito/cadastrar" class="bg-blue-500 text-white px-3 py-1 text-sm border-2 mt-4 inline-block rounded-md w-auto max-w-[220px] text-center">
                      Cadastre um novo hábito
                    </a>
                <?php endif; ?>
            </ul>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Almir\first-project\resources\views/dashboard.blade.php ENDPATH**/ ?>