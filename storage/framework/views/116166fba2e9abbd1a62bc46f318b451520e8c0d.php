<?php $__env->startSection('content'); ?>
    <div class="profile">
        <div class="sm:flex sm:items-center sm:justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Profile</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="<?php echo e(route('profile.edit')); ?>" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Edit Profile</span>
                </a>
                <a href="<?php echo e(route('profile.change.password')); ?>" class="bg-gray-200 text-gray-700 text-sm uppercase ml-2 py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Change Password</span>
                </a>
            </div>
        </div>
        <div class="mt-8 bg-white rounded">
            <div class="w-full max-w-2xl mx-auto px-6 py-12 flex justify-between">
                <div>
                    <div class="md:flex md:items-center mb-4">
                        <div class="md:w-2/4">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Name : 
                            </label>
                        </div>
                        <div class="md:w-2/4">
                            <span class="block text-gray-600 font-bold"><?php echo e(auth()->user()->name); ?></span>
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-4">
                        <div class="md:w-2/4">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Email :
                            </label>
                        </div>
                        <div class="md:w-2/4">
                            <span class="text-gray-600 font-bold"><?php echo e(auth()->user()->email); ?></span>
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-4">
                        <div class="md:w-2/4">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Role :
                            </label>
                        </div>
                        <div class="md:w-2/4">
                            <span class="text-gray-600 font-bold"><?php echo e(auth()->user()->roles[0]->name ?? ''); ?></span>
                        </div>
                    </div>
                </div>        
                <div>
                    <div>
                        <img class="w-20 h-20 sm:w-32 sm:h-32 rounded" src="<?php echo e(asset('images/profile/' . auth()->user()->profile_picture)); ?>" alt="avatar">    
                    </div>        
                </div>        
            </div>        
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vdcoo\Downloads\Laravel Project\Project 1\resources\views/profile/index.blade.php ENDPATH**/ ?>