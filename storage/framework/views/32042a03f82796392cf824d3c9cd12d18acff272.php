<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full sm:max-w-sm bg-gray-200 text-center border border-gray-300 rounded px-8 py-6 my-4 sm:my-0">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl"><?php echo e(sprintf("%02d", $parents->children_count)); ?></span>
                <span class="leading-tight">Children</span>
            </h3>
        </div>
    </div>
</div>

<div class="w-full block mt-4 sm:mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <?php $__currentLoopData = $parents->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="w-full bg-gray-200 text-center border border-gray-300 rounded px-8 py-6 mb-4 <?php echo e(($key>=1) ? 'ml-0 sm:ml-2' : ''); ?> <?php echo e(($parents->children_count===1) ? 'sm:max-w-sm' : ''); ?>">
                <div class="text-gray-700 font-bold">
                    <div class="mb-6">
                        <div class="text-lg uppercase"><?php echo e($children->user->name); ?></div>
                        <div class="text-sm lowercase leading-tight"><?php echo e($children->user->email); ?></div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Class :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->class->class_name); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Role :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->roll_number); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Phone :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->phone); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Gender :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->gender); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Date of Birth :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->dateofbirth); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Address :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->current_address); ?></div>
                    </div>

                    <div class="mt-6">
                        <a href="<?php echo e(route('attendance.show',$children->id)); ?>" class="bg-gray-100 inline-block mb-4 text-xs text-gray-600 uppercase font-semibold px-4 py-2 border border-gray-400 rounded">Attendence</a>
                        <a href="<?php echo e(route('teacher.attendance.create',$children->id)); ?>" class="bg-gray-100 inline-block mb-4 text-xs text-gray-600 uppercase font-semibold px-4 py-2 border border-gray-400 rounded">Fees</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> <!-- ./END PARENT --><?php /**PATH C:\Users\vdcoo\Downloads\Laravel Project\Project 1\resources\views/dashboard/parents.blade.php ENDPATH**/ ?>