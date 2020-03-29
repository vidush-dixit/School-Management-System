<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'SMS')); ?></title>

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
</head>
<body class="font-sans antialiased">
    <div id="app-2">

        
        
        <div class="main flex flex-wrap justify-end">
            
            <div class="content w-full">
                <div class="container mx-auto p-4 sm:p-6">

                    <?php echo $__env->yieldContent('content'); ?>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html><?php /**PATH C:\Users\vdcoo\Downloads\Laravel Project\Project 1\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>