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
                    <form method="POST" action="/auth/socialite/register">
                        @csrf
                        <div class="flex mt-8">
                            <div class="flex h-14 w-full justify-center items-center text-3xl text-oren font-tulisan ">COMPLETE YOUR REGISTRATION</div>
                        </div>
                        <div class="flex justify-center items-center ">
                            <div class="flex mt-10  w-32 h-32 mb-10">
                                <img class="rounded-full" src="{{ $user->avatar }}" alt="">
                            </div>
                        </div>
                        <div class="flex px-4 w-full mt-2 items-center justify-center">
                            <div class="h-10 w-full max-w-md relative">
                                <div class="absolute w-16 h-10 flex items-center justify-end fill-current text-gray-300">
                                    <x-svg.user/>
                                </div>
                                <x-jet-input id="username" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder = 'Username'" class="w-full" type="text" name="username" :value="old('username')" required />
                            </div>
                        </div>

                        <div class="flex px-4 w-full mt-2 items-center justify-center">
                            <div class="h-10 w-full max-w-md relative">
                                <div class="absolute w-16 h-10 flex items-center justify-end fill-current text-gray-300">
                                    <x-svg.email/>
                                </div>
                                <x-jet-input id="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address '" class="w-full" type="email" name="email" value="{{ $user->email }}" required />
                            </div>
                        </div>
                        <input type="hidden" name="name" value="{{ $user->name }}">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <input type="hidden" name="token" value="{{ $user->token }}">
                        <input type="hidden" name="avatar" value="{{ $user->avatar }}">
                        <input type="hidden" name="provider" value="{{ $provider }}">
                        <div class="flex px-4 sm:px-8 w-full mt-4">
                            <x-jet-validation-errors class="mb-4" />
                        </div>
                        <div class="flex w-full justify-center items-center px-4 mt-2 mb-12">
                            <div class="w-full max-w-md flex">
                                <x-jet-button class="mr-2 flex justify-center items-center h-10 w-1/2 bg-oren hover:bg-oren hover:bg-opacity-80">
                                        {{ __('Cancel') }}
                                </x-jet-button>
                                <x-jet-button class="ml-2 flex justify-center items-center h-10 w-1/2">
                                        {{ __('Sign Up') }}
                                </x-jet-button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>