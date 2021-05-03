<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="w-60 h-60 lg:w-full lg:max-w-lg lg:h-auto"><x-svg.logo/></div>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="w-full lg:flex">
            <div class="px-2 flex justify center w-full items-center justify-center">
                <div class=" bg-white dark:bg-grey auto w-full max-w-lg rounded-besar shadow-lg mb-8">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class=" text-oren text-5xl text-center mb-10 font-tulisan mt-14">FORGOT PASSWORD?</div>
                        <div class="w-full max-w-lg flex text-md justify-center items-center mb-10 font-ibm"><div class="w-full max-w-sm text-center text-lg text-grey-dark dark:text-gray-300 px-6 sm:px-2">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. </div></div>
                        
                        <div class="flex px-4 w-full mt-2 items-center justify-center">
                            <div class="h-10 w-full max-w-md relative">
                                <div class="absolute w-16 h-10 flex items-center justify-end fill-current text-gray-300">
                                    <x-svg.email/>
                                </div>
                                <x-jet-input id="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address '" class="w-full" type="email" name="email" :value="old('email')" required />
                                
                            </div>
                        </div>

                        <div class="flex w-full justify-center items-center px-4 mt-8">
                            <x-jet-button class="flex justify-center items-center h-10 w-full max-w-md">
                                    {{ __('Email Password Reset Link') }}
                            </x-jet-button>
                        </div>
                        <div class="flex justify-center items-center mb-11">
                            
                            <a href="{{ route('login') }}" class="mt-10  text-teal font-bold font-ibm">Back to Login</a>
                        </div>
                        
                    </form>

                    
                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
