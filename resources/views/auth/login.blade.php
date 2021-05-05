<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="w-60 h-60 lg:w-full lg:max-w-lg lg:h-auto"><x-svg.logo/></div>
        </x-slot>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="w-full lg:flex">
            <div class="px-2 flex justify center w-full items-center justify-center">
                <div class=" bg-white dark:bg-grey auto w-full max-w-lg rounded-besar shadow-lg mb-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="flex ">
                            <a href="{{ route('register') }}" class="flex w-72 h-14 bg-gray-200 dark:bg-grey-light justify-center items-center text-3xl text-teal rounded rounded-tl-besar cursor-pointer font-tulisan">SIGN UP</a>
                            <div class="flex w-72 h-14 justify-center items-center text-3xl text-oren font-tulisan ">SIGN IN</div>
                        </div>
                        <div class="flex justify-center items-center mt-6 w-full px-4">
                            <div class="flex h-10 w-full max-w-md">
                                <a href="#"class=" flex justify-center items-center h-10 w-1/2 bg-facebook rounded-full text-white font-ibm mr-2 "><x-svg.facebook/>Facebook</a>
                                <a href="/auth/google/redirect" class=" flex justify-center items-center h-10 w-1/2 bg-hijaugoogle rounded-full text-white font-ibm ml-2"><x-svg.google/>Google</a>
                            </div>
                        </div>
                        <div class="flex justify-center items-center mt-2 w-full px-4">
                            <div class="flex h-10 w-full max-w-md">
                                <a href="#" class=" flex justify-center items-center h-10 w-1/2 bg-black rounded-full text-white font-ibm mr-2"><x-svg.apple/>Apple</a>
                                <a href="#" class=" flex justify-center items-center h-10 w-1/2 bg-outlook rounded-full text-white font-ibm ml-2"><x-svg.outlook/>Outlook</a>
                            </div>
                        </div>
                        <div class="flex items-center justify-center w-full px-4 h-6 mt-2">
                            <div class="flex w-full max-w-md items-center justify-center">
                                <div class="w-1/2 h-px bg-gray-300 dark:bg-grey-light mx-2"></div> <div class="font-bold text-gray-500 dark:text-gray-300">Or</div>
                                <div class="w-1/2 h-px bg-gray-300 dark:bg-grey-light mx-2"></div>
                            </div>
                        </div>
                        <div class="flex px-4 w-full mt-2 items-center justify-center">
                            <div class="h-10 w-full max-w-md relative">
                                <div class="absolute w-16 h-10 flex items-center justify-end fill-current text-gray-300">
                                    <x-svg.email/>
                                </div>
                                <x-jet-input id="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address '" class="w-full" type="email" name="email" :value="old('email')" required />
                                
                            </div>
                        </div>

                        <div class="flex px-4 w-full mt-2 items-center justify-center">
                            <div class="h-10 w-full max-w-md relative">
                                <div class="absolute w-16 h-10 flex items-center justify-end fill-current text-gray-300">
                                    <x-svg.password/>
                                </div>
                                <x-jet-input id="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password '" class="flex text-center h-10 bg-white border rounded-full font-ibm w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>
                        </div>
                        <div class="flex px-4 sm:px-8 w-full mt-4">
                            <x-jet-validation-errors class="mb-4" />
                        </div>
                        <div class="">
                            <label class="flex px-4 w-full mt-2 items-center justify-center">
                                <div class="h-10 w-full max-w-md relative">
                                    <div class="absolute left-0 w-30 h-10 flex items-center fill-current text-gray-600">
                                        <div class="block">
                                            <label for="remember_me" class="flex items-center">
                                                <x-jet-checkbox id="remember_me" name="remember" />
                                                <span class="ml-2 text-md text-gray-600 dark:text-gray-300">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>  
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="flex w-full justify-center items-center px-4 mt-2">
                            <x-jet-button class="flex justify-center items-center h-10 w-full max-w-md">
                                    {{ __('Sign in') }}
                            </x-jet-button>
                        </div>
                        <div class="flex justify-center items-center">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="mt-4 mb-2 font-bold text-teal font-ibm">Forgot Password ?</a>  
                            @endif
                        </div>
                        <div class="flex w-full justify-center items-center px-4 mt-2">
                            <div class="justify-center items-center bg-gray-300 dark:bg-grey-light h-px w-full max-w-md"></div>
                        </div>
                        <div class="flex justify-center items-center mb-8">
                            <div class="mt-2 mr-2 font-bold font-ibm text-gray-500 dark:text-gray-300">Don't have an account?</div>
                            <a href="{{ route('register') }}" class="mt-2  text-teal font-bold font-ibm">Sign Up</a>
                        </div>
                        
                    </form>

                    
                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
