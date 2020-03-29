@extends('layouts.frontend')

@section('content')

<div style="position: absolute; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; background:url('images/SMS.png'); background-size: cover; background-repeat: no-repeat; filter: blur(6px); overflow: none;"></div>

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

<div class="bg-white shadow rounded w-full max-w-md mx-auto sm:mt-3" style="z-index: 2;">
    <div class="flex flex-wrap py-4"><span class="bg-red-700 text-xs text-red-700 md:w-1/12 sm:w-1/12 px-3">1</span><span class="text-red-700 text-4xl md:w-1/2 sm:w-1/2 px-3">Sign Up</span></div>
    
    <hr class="bg-red-700" style="margin: 0; border: 2px solid #c53030;" />

    <form method="POST" action="{{ route('register') }}" class="w-full max-w-lg px-8 mt-6 pb-8 mb-4">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full">
                <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Name
                </label>
                <input type="text" name="name" id="name" class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Full Name">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full">
                <label for="emailaddress" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Email Address
                </label>
                <input type="email" name="email" id="emailaddress" class="shadow appearance-none border @error('email') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="email@example.com">
                @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <label for="password" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Password
                </label>
                <input type="password" name="password" id="password" class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="******************">
                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 pl-2">
                <label for="password-confirm" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Confirm Password
                </label>
                <input type="password" name="password_confirmation" id="password-confirm" class="shadow appearance-none border @error('password_confirmation') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="******************">
                @error('password_confirmation')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex items-center justify-between">
            <button class="mx-auto bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline" type="submit">
                Sign Up
            </button>
        </div>
    </form>
</div>

@endsection