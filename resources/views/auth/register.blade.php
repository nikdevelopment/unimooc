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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="flex ">
                            <div class="flex w-72 h-14 justify-center items-center text-3xl  rounded-besar rounded-tl-besar  text-oren font-tulisan">SIGN UP</div>
                            <a href="{{ route('login') }}" class="flex w-72 h-14 bg-gray-200 dark:bg-grey-light justify-center items-center text-3xl  text-teal cursor-pointer rounded-tr-besar font-tulisan">SIGN IN</a>
                        </div>
                        <div class="flex justify-center items-center mt-6 w-full px-4">
                            <div class="flex h-10 w-full max-w-md">
                                <button class=" flex justify-center items-center h-10 w-1/2 bg-facebook rounded-full text-white font-ibm mr-2 "><x-svg.facebook/>Facebook</button>
                                <button class=" flex justify-center items-center h-10 w-1/2 bg-hijaugoogle rounded-full text-white font-ibm ml-2"><x-svg.google/>Google</button>
                            </div>
                        </div>
                        <div class="flex justify-center items-center mt-2 w-full px-4">
                            <div class="flex h-10 w-full max-w-md">
                                <button class=" flex justify-center items-center h-10 w-1/2 bg-black rounded-full text-white font-ibm mr-2"><x-svg.apple/>Apple</button>
                                <button class=" flex justify-center items-center h-10 w-1/2 bg-outlook rounded-full text-white font-ibm ml-2"><x-svg.outlook/>Outlook</button>
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
                                    <x-svg.user/>
                                </div>
                                <x-jet-input id="user_name" placeholder="User Name" onfocus="this.placeholder=''" onblur="this.placeholder = 'User Name '" class="w-full" type="text" name="user_name" :value="old('user_name')" required autocomplete="user_name"/>
                            </div>
                        </div>

                        <div class="flex px-4 w-full mt-2 items-center justify-center">
                            <div class="h-10 w-full max-w-md relative">
                                <div class="absolute w-16 h-10 flex items-center justify-end fill-current text-gray-300">
                                    <x-svg.email/>
                                </div>
                                <x-jet-input id="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address '" class="w-full" type="email" name="email" :value="old('email')" required/>
                            </div>
                        </div>

                        <div class="flex px-4 w-full mt-2 items-center justify-center">
                            <div class="h-auto w-full max-w-md relative">
                                <div class="absolute w-16 h-10 flex items-center justify-end fill-current text-gray-300">
                                    <x-svg.password/>
                                </div>
                                @if($errors->has('password'))
                                    <input  placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password '" class="flex text-center h-10 bg-white border-red-600 border-2 rounded-full font-ibm w-full" type="password" name="password" required/>
                                    <span class=" text-red-600">{{ $errors->first('password') }}</span>
                                @else
                                    <x-jet-input id="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password '" class="flex text-center h-10 bg-white border rounded-full font-ibm w-full" type="password" name="password" required autocomplete="current-password" />
                                @endif
                            </div>
                        </div>

                        <div class="flex px-4 w-full mt-2 items-center justify-center">
                            <div class="h-10 w-full max-w-md relative">
                                <div class="absolute w-16 h-10 flex items-center justify-end fill-current text-gray-300">
                                    <x-svg.password/>
                                </div>
                                <x-jet-input id="password_confirmation" placeholder="Password Confirmation" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password Confirmation'" class="flex text-center h-10 bg-white border rounded-full font-ibm w-full" type="password" name="password_confirmation" />
                            </div>
                        </div>
                        
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif
                        <div class="flex w-full justify-center items-center px-4 mt-4">
                            <x-jet-button class="focus:border-white flex justify-center items-center h-10 w-full max-w-md">
                                    {{ __('Sign Up') }}
                            </x-jet-button>
                        </div>
                        <div class="flex justify-center items-center mb-8">
                            <div class="mt-2 mr-2 font-bold font-ibm text-gray-500 dark:text-gray-300">Don't have an account?</div>
                            <a href="{{ route('login') }}" class="mt-2  text-teal font-bold font-ibm">Sign In</a>
                        </div>                             
                    </form>                    
                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

