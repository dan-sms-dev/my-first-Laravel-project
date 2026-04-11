<div>
    <nav>
        <ul class="flex gap-4 items-center">
            <li>
                <a href="<?php echo e(route('habits.index')); ?>"
                    class="<?php echo e(Route::is('habits.index') ? 'font-bold underline' : ''); ?> text-md border-r-3 border-habit-blue pr-2 hover:underline">
                    Hoje
                </a>
            </li>
            <li>
                <a href="@" class="text-md border-r-3 border-habit-blue pr-2 hover:underline">
                    Historico
                </a>
            </li>
            <li>
                <a href="@" class="text-md border-r-3 border-habit-blue pr-2 hover:underline">
                    Calendario
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('habits.settings')); ?>" class="<?php echo e(Route::is('habits.settings') ? 'font-bold underline' : ''); ?> text-md hover:underline">
                    Gerenciar hábitos
                </a>
            </li>
        </ul>
    </nav>
</div>
<?php /**PATH C:\Users\Almir\first-project\resources\views/components/navbar.blade.php ENDPATH**/ ?>