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
        <h1 class="text-4xl font-bold text-center">
            Dashboard
        </h1>

        <section class="bg-white max-w-[600px] mx-auto p-8 pb-8 border-2 mt-4">

        <a href="<?php echo e(route('habits.create')); ?>" class="text-center p-2 border-2 bg-blue-500 text-white font-bold rounded-md w-auto max-w-[220px] block mx-auto mb-4">
          Cadastrar Hábito
        </a>

        <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <div class="flex">
          <p class="bg-green-100 border border-green-400 text-green-700 p-3 mb-4 block">
            mensagem
            <?php echo e(session('success')); ?>

          </p>
        </div>
        <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>

        <div class="flex flex-col gap-4 text-center">
            <h2 class="text-xl mt-4 font-bold">
                Listagem dos seus hábitos:
            </h2>

            <ul class="flex flex-col gap-2 text-center">
                <?php $__empty_1 = true; $__currentLoopData = $habits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="pl-4 text-center">
                      <div class="flex gap-2 items-center">
                        <p class="font-bold text-xl text-center">
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
                    <a href="<?php echo e(route('habits.create')); ?>" class="bg-blue-500 text-white px-3 py-1 text-sm border-2 mt-4 inline-block rounded-md w-auto max-w-[220px] text-center">
                      Cadastre um novo hábito
                    </a>
                <?php endif; ?>
                </section>
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