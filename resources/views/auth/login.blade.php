<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="mt-4 mb-6">
        <a href="{{ url('/') }}" class="text-xl text-gray-600 hover:text-indigo-900 inline-block">
            ← Quay về trang chủ
        </a>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

<<<<<<< HEAD
        <!-- Email Address -->
=======
>>>>>>> hiepDev
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Bạn quên mật khẩu?') }}
                </a>
            @endif
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Ghi Nhớ Mật Khẩu') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">

            <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:text-indigo-800 underline">
                Chưa có tài khoản? Đăng ký
            </a>
            <x-primary-button class="ml-3">
                {{ __('Đăng Nhập') }}
            </x-primary-button>
        </div>
        
    </form>

    {{-- Nút Đăng nhập bằng Google --}}
    <div class="flex items-center justify-end mt-4"> 
        <a href="{{ route('google.redirect') }}" style="background-color: #DB4437; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none; display: inline-flex; align-items: center; justify-content: center;">
            Đăng nhập bằng Google
        </a>
    </div>

</x-guest-layout>