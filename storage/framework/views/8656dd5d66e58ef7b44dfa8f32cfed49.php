<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['habit', 'year' => null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['habit', 'year' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    // Define o ano (padrão: ano atual)
    $selectedYear = $year ?? now()->year;

    // Primeiro e último dia do ano
    $startDate = \Carbon\Carbon::create($selectedYear, 1, 1); // 01/01/YYYY
    $endDate = \Carbon\Carbon::create($selectedYear, 12, 31); // 31/12/YYYY

    $weeks = [];
    $currentWeek = [];

    // Preenche dias vazios no início (se o ano não começar no domingo)
    $firstDayOfWeek = $startDate->dayOfWeek; // 0 = domingo, 1 = segunda, etc
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        $currentWeek[] = null; // Placeholder vazio
    }

    // Agrupa os dias em semanas (domingo a sábado)
    for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
        $currentWeek[] = $date->copy();

        // Fecha a semana no sábado ou no último dia
        if ($date->isSaturday() || $date->eq($endDate)) {
            $weeks[] = $currentWeek;
            $currentWeek = [];
        }
    }
?>

<div class="mb-6">
    
    <div class="flex items-center justify-between mb-3">
        <h2 class="font-bold text-lg">
            <?php echo e($habit->name); ?>

        </h2>
        <span class="text-sm text-gray-600 font-semibold">
            <?php echo e($selectedYear); ?>

        </span>
    </div>

    
    <div class="bg-orange-50 p-2 habit-shadow-lg">
        <div class="flex gap-1 justify-between w-full">
            <?php $__currentLoopData = $weeks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $week): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col gap-1">
                    <?php $__currentLoopData = $week; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($day === null): ?>
                            
                            <div class="w-3 h-3"></div>
                        <?php else: ?>
                            <?php
                                // TODO: Verificar se tem log nessa data
                                $hasDone = $habit->habitLogs
                                    ->where('completed_at', $day->format('Y-m-d'))
                                    ->isNotEmpty();
                            ?>
                            <div class="w-3 h-3 rounded-xs cursor-pointer transition hover:ring-2 hover:ring-blue-400
                       <?php echo e($hasDone ? 'bg-[#61A6AB]' : 'bg-[#DADFE9]'); ?>"
                                title="<?php echo e($day->format('d/m/Y')); ?> - <?php echo e($day->translatedFormat('l')); ?>"></div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    
    <div class="flex items-center gap-4 mt-2 text-sm text-gray-600">
        <div class="flex items-center gap-1.5">
            <div class="w-3 h-3 bg-[#DADFE9] rounded-xs"></div>
            <span>Não feito</span>
        </div>
        <div class="flex items-center gap-1.5">
            <div class="w-3 h-3 bg-[#61A6AB] rounded-xs"></div>
            <span>Feito</span>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Almir\first-project\resources\views/components/contribution.blade.php ENDPATH**/ ?>