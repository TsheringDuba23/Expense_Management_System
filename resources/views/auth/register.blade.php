<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <div>
            <x-input-label for="employee_id" :value="__('Employee ID')" />
            <x-text-input id="employee_id" name="employee_id" type="text" class="mt-1 block w-full" --required />
            <x-input-error class="mt-2" :messages="$errors->get('employee_id')" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <!-- Designation -->
        <div class="mt-4">
            <x-input-label for="designation" :value="__('Designation')" />
            <x-text-input id="designation" class="block mt-1 w-full" type="text" name="designation" required />
            <x-input-error :messages="$errors->get('designation')" class="mt-2" />
        </div>

        <!-- Department -->
        <div class="mt-4">
            <x-input-label for="department" :value="__('Department')" />
            <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" required />
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>

        <!-- Basic Pay -->
        <div class="mt-4">
            <x-input-label for="basic_pay" :value="__('Basic Pay')" />
            <x-text-input id="basic_pay" class="block mt-1 w-full" type="text" name="basic_pay" required />
            <x-input-error :messages="$errors->get('basic_pay')" class="mt-2" />
        </div>

        


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
