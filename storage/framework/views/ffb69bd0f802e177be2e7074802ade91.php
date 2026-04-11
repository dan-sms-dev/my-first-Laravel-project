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
        <section class="bg-white max-w-[600px] mx-auto p-8 pb-8 border-2 mt-4">
            <h1 class="text-3xl font-bold mb-4">
                Registre-se
            </h1>

            <p class="mb-2">
                Preencha os campos para se cadastrar
            </p>

            <form action="<?php echo e(route('auth.register')); ?>" method="POST" class="flex flex-col">
                <?php echo csrf_field(); ?>

                <div class="flex flex-col gap-2 mb-2">

                    <label for="name">
                        Nome
                    </label>

                    <input type="text" name="name" placeholder="Seu nome"
                        class="bg-white p-2 border-2 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                </div>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm font-bold text-center">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="flex flex-col gap-2 mb-2">

                    <label for="email">
                        Email
                    </label>

                    <input type="email" name="email" placeholder="your@email.com"
                        class="bg-white p-2 border-2 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                </div>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm font-bold text-center">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="flex flex-col gap-2 mb-2">

                    <label for="password">
                        Password
                    </label>

                    <div class="relative">
                        <input id="register-password" type="password" name="password" placeholder="********"
                            class="bg-white p-2 pr-12 w-full border-2 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                        <button
                            type="button"
                            data-toggle-password
                            data-target="register-password"
                            class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer"
                            aria-label="Mostrar senha">
                            <span data-eye-open class="hidden">
                                <?php if (isset($component)) { $__componentOriginal95d0561691888b1ea30e4dcd205f4e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95d0561691888b1ea30e4dcd205f4e99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.eye','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal95d0561691888b1ea30e4dcd205f4e99)): ?>
<?php $attributes = $__attributesOriginal95d0561691888b1ea30e4dcd205f4e99; ?>
<?php unset($__attributesOriginal95d0561691888b1ea30e4dcd205f4e99); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal95d0561691888b1ea30e4dcd205f4e99)): ?>
<?php $component = $__componentOriginal95d0561691888b1ea30e4dcd205f4e99; ?>
<?php unset($__componentOriginal95d0561691888b1ea30e4dcd205f4e99); ?>
<?php endif; ?>
                            </span>
                            <span data-eye-closed>
                                <?php if (isset($component)) { $__componentOriginal4891b936bb636bf449a127694da4ef58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4891b936bb636bf449a127694da4ef58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.eye-closed','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.eye-closed'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4891b936bb636bf449a127694da4ef58)): ?>
<?php $attributes = $__attributesOriginal4891b936bb636bf449a127694da4ef58; ?>
<?php unset($__attributesOriginal4891b936bb636bf449a127694da4ef58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4891b936bb636bf449a127694da4ef58)): ?>
<?php $component = $__componentOriginal4891b936bb636bf449a127694da4ef58; ?>
<?php unset($__componentOriginal4891b936bb636bf449a127694da4ef58); ?>
<?php endif; ?>
                            </span>
                        </button>
                    </div>

                </div>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm font-bold text-center">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="flex flex-col gap-2 mb-2">

                    <label for="password_confirmation">
                        Confirme sua senha
                    </label>

                    <div class="relative">
                        <input id="register-password-confirmation" type="password" name="password_confirmation" placeholder="********"
                            class="bg-white p-2 pr-12 w-full border-2 <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                        <button
                            type="button"
                            data-toggle-password
                            data-target="register-password-confirmation"
                            class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer"
                            aria-label="Mostrar senha">
                            <span data-eye-open class="hidden">
                                <?php if (isset($component)) { $__componentOriginal95d0561691888b1ea30e4dcd205f4e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95d0561691888b1ea30e4dcd205f4e99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.eye','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal95d0561691888b1ea30e4dcd205f4e99)): ?>
<?php $attributes = $__attributesOriginal95d0561691888b1ea30e4dcd205f4e99; ?>
<?php unset($__attributesOriginal95d0561691888b1ea30e4dcd205f4e99); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal95d0561691888b1ea30e4dcd205f4e99)): ?>
<?php $component = $__componentOriginal95d0561691888b1ea30e4dcd205f4e99; ?>
<?php unset($__componentOriginal95d0561691888b1ea30e4dcd205f4e99); ?>
<?php endif; ?>
                            </span>
                            <span data-eye-closed>
                                <?php if (isset($component)) { $__componentOriginal4891b936bb636bf449a127694da4ef58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4891b936bb636bf449a127694da4ef58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.eye-closed','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.eye-closed'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4891b936bb636bf449a127694da4ef58)): ?>
<?php $attributes = $__attributesOriginal4891b936bb636bf449a127694da4ef58; ?>
<?php unset($__attributesOriginal4891b936bb636bf449a127694da4ef58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4891b936bb636bf449a127694da4ef58)): ?>
<?php $component = $__componentOriginal4891b936bb636bf449a127694da4ef58; ?>
<?php unset($__componentOriginal4891b936bb636bf449a127694da4ef58); ?>
<?php endif; ?>
                            </span>
                        </button>
                    </div>

                </div>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm font-bold text-center">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <button type="submit" class="bg-blue-500 text-white p-2 mt-4">
                    Cadastrar
                </button>
            </form>

            <p class="text-center mt-4">
                Já tem uma conta? <a href="<?php echo e(route('site.login')); ?>"
                    class="text-blue-500 underline hover:opacity-60 transition">Faça login</a>
            </p>

        </section>
    </main>

    <script>
        document.querySelectorAll('[data-toggle-password]').forEach((button) => {
            button.addEventListener('click', () => {
                const input = document.getElementById(button.dataset.target);

                if (!input) {
                    return;
                }

                const isPassword = input.type === 'password';

                input.type = isPassword ? 'text' : 'password';
                button.setAttribute('aria-label', isPassword ? 'Ocultar senha' : 'Mostrar senha');
                button.querySelector('[data-eye-open]')?.classList.toggle('hidden', !isPassword);
                button.querySelector('[data-eye-closed]')?.classList.toggle('hidden', isPassword);
            });
        });
    </script>
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
<?php /**PATH C:\Users\Almir\first-project\resources\views/register.blade.php ENDPATH**/ ?>