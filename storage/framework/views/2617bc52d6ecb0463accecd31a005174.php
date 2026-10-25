<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume Analysis Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-50 text-slate-900">
    <div class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <div class="flex items-center gap-3">
                <div class="grid h-10 w-10 place-items-center rounded-xl bg-slate-900 text-sm font-bold text-white">
                    AI
                </div>
                <div>
                    <p class="font-bold">ResumeIQ</p>
                    <p class="text-xs text-slate-500">Analysis Report</p>
                </div>
            </div>

            <a href="<?php echo e(route('resume.index')); ?>"
               class="rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm hover:bg-slate-50">
                New Analysis
            </a>
        </div>
    </div>

    <main class="mx-auto max-w-7xl px-6 py-8">
        <div class="mb-8 rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
            <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
                <div>
                    <span class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-bold uppercase tracking-wide text-indigo-700">
                        AI Resume Review
                    </span>

                    <h1 class="mt-4 text-4xl font-extrabold tracking-tight">
                        Your resume analysis is ready
                    </h1>

                    <p class="mt-3 max-w-2xl text-slate-500">
                        Review your ATS score, recruiter-style feedback, missing keywords, and improvement suggestions.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="rounded-2xl bg-slate-900 px-6 py-5 text-white">
                        <p class="text-xs font-medium text-slate-300">Overall</p>
                        <p class="mt-2 text-4xl font-black"><?php echo e($analysis['overall_score']); ?><span class="text-lg text-slate-400">/100</span></p>
                    </div>

                    <div class="rounded-2xl bg-indigo-600 px-6 py-5 text-white">
                        <p class="text-xs font-medium text-indigo-100">ATS</p>
                        <p class="mt-2 text-4xl font-black"><?php echo e($analysis['ats_score']); ?><span class="text-lg text-indigo-200">/100</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-[1fr_380px]">
            <section class="space-y-6">
                <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm">
                    <div class="mb-4 flex items-center justify-between">
                        <h2 class="text-lg font-bold">Executive Summary</h2>
                        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">
                            Overview
                        </span>
                    </div>

                    <p class="leading-8 text-slate-600">
                        <?php echo e($analysis['summary']); ?>

                    </p>
                </div>

                <div class="rounded-3xl border border-indigo-100 bg-gradient-to-br from-indigo-50 to-white p-7 shadow-sm">
                    <h2 class="text-lg font-bold text-slate-950">Improved Professional Summary</h2>
                    <p class="mt-4 rounded-2xl bg-white p-5 leading-8 text-slate-700 shadow-sm ring-1 ring-indigo-100">
                        <?php echo e($analysis['rewritten_summary']); ?>

                    </p>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm">
                    <h2 class="mb-5 text-lg font-bold">Improvement Suggestions</h2>

                    <div class="space-y-3">
                        <?php $__currentLoopData = $analysis['suggestions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex gap-4 rounded-2xl border border-slate-100 bg-slate-50 p-4">
                                <div class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-indigo-600 text-xs font-bold text-white">
                                    <?php echo e($loop->iteration); ?>

                                </div>
                                <p class="text-sm leading-6 text-slate-700"><?php echo e($item); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="grid gap-6 md:grid-cols-2">
                    <?php if (isset($component)) { $__componentOriginal6889e6fdd768756208d3b85ec58e0123 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6889e6fdd768756208d3b85ec58e0123 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.report-card','data' => ['title' => 'Strengths','items' => $analysis['strengths']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('report-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Strengths','items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($analysis['strengths'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6889e6fdd768756208d3b85ec58e0123)): ?>
<?php $attributes = $__attributesOriginal6889e6fdd768756208d3b85ec58e0123; ?>
<?php unset($__attributesOriginal6889e6fdd768756208d3b85ec58e0123); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6889e6fdd768756208d3b85ec58e0123)): ?>
<?php $component = $__componentOriginal6889e6fdd768756208d3b85ec58e0123; ?>
<?php unset($__componentOriginal6889e6fdd768756208d3b85ec58e0123); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal6889e6fdd768756208d3b85ec58e0123 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6889e6fdd768756208d3b85ec58e0123 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.report-card','data' => ['title' => 'Weaknesses','items' => $analysis['weaknesses']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('report-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Weaknesses','items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($analysis['weaknesses'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6889e6fdd768756208d3b85ec58e0123)): ?>
<?php $attributes = $__attributesOriginal6889e6fdd768756208d3b85ec58e0123; ?>
<?php unset($__attributesOriginal6889e6fdd768756208d3b85ec58e0123); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6889e6fdd768756208d3b85ec58e0123)): ?>
<?php $component = $__componentOriginal6889e6fdd768756208d3b85ec58e0123; ?>
<?php unset($__componentOriginal6889e6fdd768756208d3b85ec58e0123); ?>
<?php endif; ?>
                </div>
            </section>

            <aside class="space-y-6">
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                    <h3 class="text-base font-bold">Score Breakdown</h3>

                    <div class="mt-6 space-y-5">
                        <div>
                            <div class="mb-2 flex justify-between text-sm">
                                <span class="font-medium text-slate-600">Overall Score</span>
                                <span class="font-bold"><?php echo e($analysis['overall_score']); ?>%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-100">
                                <div class="h-2 rounded-full bg-slate-900" style="width: <?php echo e($analysis['overall_score']); ?>%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-2 flex justify-between text-sm">
                                <span class="font-medium text-slate-600">ATS Score</span>
                                <span class="font-bold"><?php echo e($analysis['ats_score']); ?>%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-100">
                                <div class="h-2 rounded-full bg-indigo-600" style="width: <?php echo e($analysis['ats_score']); ?>%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                    <h3 class="mb-4 text-base font-bold">Missing Keywords</h3>

                    <div class="flex flex-wrap gap-2">
                        <?php $__currentLoopData = $analysis['missing_keywords']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="rounded-full bg-amber-50 px-3 py-1.5 text-xs font-semibold text-amber-700 ring-1 ring-amber-100">
                                <?php echo e($item); ?>

                            </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                    <h3 class="mb-4 text-base font-bold">Recommended Roles</h3>

                    <div class="space-y-2">
                        <?php $__currentLoopData = $analysis['recommended_roles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="rounded-2xl bg-slate-50 px-4 py-3 text-sm font-medium text-slate-700">
                                <?php echo e($item); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="rounded-3xl border border-orange-100 bg-orange-50 p-6">
                    <h3 class="mb-4 text-base font-bold text-orange-900">ATS Issues</h3>

                    <ul class="space-y-3">
                        <?php $__currentLoopData = $analysis['ats_issues']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex gap-3 text-sm leading-6 text-orange-800">
                                <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-orange-500"></span>
                                <?php echo e($item); ?>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </aside>
        </div>
    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-cv-analyzer-main\resources\views/resume/result.blade.php ENDPATH**/ ?>