<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'items' => [],
    'empty' => 'No items available.',
]));

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

foreach (array_filter(([
    'title',
    'items' => [],
    'empty' => 'No items available.',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="group rounded-3xl border border-slate-200/80 bg-white/90 p-6 shadow-sm ring-1 ring-slate-950/[0.03] transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-slate-200/60">
    <div class="mb-5 flex items-center justify-between gap-4">
        <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-900">
            <?php echo e($title); ?>

        </h3>

        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-500">
            <?php echo e(count($items)); ?>

        </span>
    </div>

    <?php if(count($items)): ?>
        <div class="space-y-3">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="relative overflow-hidden rounded-2xl border border-slate-200/70 bg-gradient-to-br from-slate-50 to-white p-4 transition duration-200 hover:border-slate-300 hover:bg-white hover:shadow-sm">
                    <div class="flex gap-3">
                        <div class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-900 text-white shadow-sm">
                            <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 5.29a1 1 0 010 1.42l-7.25 7.25a1 1 0 01-1.414 0L3.296 9.216a1 1 0 111.414-1.414l4.037 4.037 6.543-6.543a1 1 0 011.414-.006z" clip-rule="evenodd" />
                            </svg>
                        </div>

                        <p class="text-sm leading-6 text-slate-700">
                            <?php echo e($item); ?>

                        </p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <div class="rounded-2xl border border-dashed border-slate-200 bg-slate-50 p-5 text-center">
            <p class="text-sm font-medium text-slate-500">
                <?php echo e($empty); ?>

            </p>
        </div>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\laravel-cv-analyzer-main\resources\views/components/report-card.blade.php ENDPATH**/ ?>