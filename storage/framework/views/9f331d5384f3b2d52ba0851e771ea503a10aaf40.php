<div class="bg-red-700 px-4 sm:px-6 py-3 flex items-center justify-between shadow h-16 fixed top-0 left-0 right-0 z-50">
    <div class="flex items-center text-white">
        <svg class="w-full h-20 sm:w-1/4 sm:h-1/5 md:w-1/2 lg:w-1/2" version="1.1" id="Capa_1" width="24" height="24" viewBox="0 0 37.463 37.463" style="enable-background:new 0 0 37.463 37.463;">
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
        <span class="font-semibold text-xs sm:text-md tracking-tight px-2">School Management System</span>
    </div>
    <div class="relative">
        <?php if(auth()->guard()->check()): ?>
            <div class="flex items-center cursor-pointer" id="opennavdropdown">
                <img class="w-8 h-8 rounded-full mr-2" src="<?php echo e(asset('images/profile/' . auth()->user()->profile_picture)); ?>" alt="Avatar">
                <p class="text-sm text-white font-semibold leading-none"><?php echo e(auth()->user()->name); ?></p>
                <svg class="w-4 h-4 stroke-current text-gray-200 ml-1 feather feather-chevron-down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
            <div class="bg-red-700 absolute top-0 right-0 mt-12 -mr-6 shadow rounded-bl rounded-br">
                <div class="hidden h-24 w-48" id="navdropdown">
                    <div class="px-8 py-4 border-t border-red-800">
                        <a href="<?php echo e(route('profile')); ?>" class="flex hover:bg-red-800 items-center pb-3 text-sm text-gray-200 font-semibold">
                            <svg class="h-4 w-4 mr-2 fill-current text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-alt" class="svg-inline--fa fa-user-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z"></path></svg>
                            <span>Profile</span>
                        </a>
                        <form action="<?php echo e(route('logout')); ?>" method="POST" class="pb-2 hover:bg-red-800">
                            <?php echo csrf_field(); ?>
                            <button class="flex items-center text-sm text-gray-200 font-semibold focus:outline-none" type="submit">
                                <svg class="h-4 w-4 mr-2 fill-current text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg>
                                <span><?php echo e(__('Logout')); ?></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php else: ?> 
            <div class="flex items-center">
                <?php if(Route::has('login')): ?>
                    <div>
                        <a class="flex items-center mr-4 text-sm text-gray-200 font-semibold" href="<?php echo e(route('login')); ?>">
                            <svg class="h-3 w-3 mr-1 fill-current text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" class="svg-inline--fa fa-sign-in-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg>
                            <span>Login</span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\Users\vdcoo\Downloads\Laravel Project\Project 1\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>