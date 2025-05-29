<div class="image-background">
    <x-guest-layout>
        <div class="mt-4 mb-6">
            <a href="{{ url('/') }}" class="text-xl text-gray-600 hover:text-indigo-900 inline-block">
                ← Quay về trang chủ
            </a>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Tên đăng nhập')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mật khẩu')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Xác nhận mật khẩu')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-indigo-600 hover:text-indigo-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Tôi đã có tài khoản?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Đăng Ký') }}
                </x-primary-button>
            </div>
        </form> 
       <div class="mt-4">
    <a href="{{ route('google.redirect') }}" style="background-color: #DB4437; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none; display: inline-flex; align-items: center; justify-content: center;">
        Đăng ký bằng Google
    </a>
</div>
    </x-guest-layout>
</div>