<?php $__env->startSection('content'); ?>

<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; background:url('../images/SMS.png'); background-size: cover; background-repeat: no-repeat; filter: blur(6px);"></div>

<div class="flex flex-wrap rounded w-full max-w-md mx-auto px-4">
    <svg class="w-full h-24 sm:w-1/4 sm:h-full md:w-1/4 lg:w-1/4" version="1.1" id="Capa_1" viewBox="0 0 37.463 37.463" style="enable-background:new 0 0 37.463 37.463;">
        <g>
            <path style="fill:#010002;" d="M36.355,29.542L36.355,29.542v-7.679l-1.01-6.055h-9.622l3.126,2.338v3.704l-2.018-1.493v0.735
            h-0.599v8.448h-0.624v-9.257h0.599v-1.112h-0.925l-7.014-5.162l-6.774,5.287h-0.821v1.114h0.675v9.131H10.69v-8.322h-0.675v-0.466
            l-1.434,1.191v-3.779l2.873-2.356H1.502l-1.01,6.055v7.678H0v2.902h37.463v-2.902H36.355z M4.93,28.044H1.583v-1.832H4.93V28.044z
            M4.93,25.118H1.583v-1.83H4.93V25.118z M6.318,28.044v-1.832h3.346v1.832H6.318z M6.319,25.118v-1.83h3.346v1.83H6.319z
            M18.396,16.278c0.733,0,1.326,0.595,1.326,1.326c0,0.731-0.593,1.326-1.326,1.326c-0.732,0-1.326-0.595-1.326-1.326
            C17.07,16.873,17.664,16.278,18.396,16.278z M23.784,29.54h-0.735v-8.358h-9.507v8.358h-0.666v-9.131h0.64v-0.43h9.852v0.304h0.416
            V29.54z M30.186,27.854H26.84v-1.832h3.346V27.854z M30.186,24.927H26.84v-1.83h3.346V24.927z M34.921,27.854h-3.346v-1.832h3.346
            V27.854z M34.921,24.927h-3.346v-1.83h3.346V24.927z M18.295,10.875h-0.204V5.41h0.427v0.104c0.468,0.204,1.601,0.591,2.239-0.101
            c0.817-0.885,2.248,0,2.248,0v2.522c0,0-1.158-0.953-2.248,0c-0.829,0.724-1.814,0.347-2.239,0.124v2.815v0.001h-0.221l9.928,7.425
            v2.111l-10.042-7.427l-8.945,7.427V18.3L18.295,10.875z"/>
        </g>
    </svg>
    <span class="mx-auto sm:px-1 md:px-1 py-3 sm:py-10 text-xl font-black">
        School Management System
    </span>
</div>

<div class="bg-white shadow rounded w-full max-w-md mx-auto" style="z-index: 2;">

    <div class="flex flex-wrap py-4"><span class="bg-red-700 text-xs text-red-700 md:w-1/12 sm:w-1/12 px-3">1</span><span class="text-red-700 text-4xl md:w-1/2 sm:w-1/2 px-3">Reset Password</span></div>
    <hr class="bg-red-700" style="margin: 0; border: 2px solid #c53030;" />

    <?php if(session('status')): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <div  class="font-bold" role="alert">
                <?php echo e(session('status')); ?>

            </div>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    <?php endif; ?>
        
    
    <form method="POST" action="<?php echo e(route('password.email')); ?>" class="bg-white shadow rounded px-8 pt-6 pb-8 mb-4">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label class="uppercase block text-gray-700 text-sm font-bold mb-2" for="emailaddress">
                Email Address
            </label>
            <input type="email" name="email" id="emailaddress" class="shadow appearance-none border <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> border-red-500 <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo e(old('email')); ?>" placeholder="email@example.com" required autocomplete="email" autofocus>
            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                <p class="text-red-500 text-sm italic"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
        
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline">
                Send Password Reset Link
            </button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vdcoo\Downloads\Laravel Project\Project 1\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>