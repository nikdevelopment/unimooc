<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

</head>
<body class="flex w-screen h-screen bg-cover items-center justify-center">
    <div class="w-full lg:flex">
        <div class="w-full flex items-center justify-center">
            <div class="w-72 h-72 lg:w-full lg:max-w-lg lg:h-auto"><x-svg.logo/></div>
        </div>
        <div class="px-4 flex justify center w-full items-center justify-center mt-4">
            <div class=" bg-white h-auto w-full max-w-xl rounded-besar shadow-lg">
                <div class="flex ">
                    <button onclick="myFunction()" class="flex w-72 h-20 bg-gray-200 justify-center items-center text-5xl text-birulg rounded rounded-tl-3xl cursor-pointer font-tulisan">SIGN UP</button>
                    <button class="flex w-72 h-20 justify-center items-center text-5xl text-oren font-tulisan ">SIGN IN</button>
                </div>
                <div class="flex justify-center items-center mt-8">
                    <button class=" flex justify-center items-center h-10 w-48 bg-facebook rounded-full text-white font-ibm mr-1"><x-svg.facebook/>Facebook</button>
                    <button class=" flex justify-center items-center h-10 w-48 bg-hijaugoogle rounded-full text-white font-ibm"><x-svg.google/>Google</button>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <button class=" flex justify-center items-center h-10 w-48 bg-black rounded-full text-white font-ibm mr-1"><x-svg.apple/>Apple</button>
                    <button class=" flex justify-center items-center h-10 w-48 bg-outlook rounded-full text-white font-ibm"><x-svg.outlook/>Outlook</button>
                </div>
                <div class="flex justify-center items-center mt-3">
                    <div class="h-10 w-96  relative">
                        <div class="absolute w-20 ml-0.05 h-10 flex items-center justify-center fill-current text-gray-300">
                            <x-svg.email/>
                        </div>
                        <input type="email" placeholder="Email Address" class=" flex justify-center items-center text-center h-10 w-96 bg-white border border-gray-400 rounded-full ">
                    </div>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <div class="h-10 w-96 relative">
                        <div class="absolute w-20 ml-0.05 h-10 flex items-center justify-center fill-current text-gray-300">
                            <x-svg.password/>
                        </div>
                        <input type="password" placeholder="Password" class=" flex justify-center items-center text-center h-10 w-96 bg-white border border-gray-400 rounded-full font-ibm">
                    </div>
                </div>
                <div class="mt-4">
                <label class="flex justify-start items-center ml-24">
                    <div class="bg-white border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                        <input type="checkbox" class="opacity-0 absolute">
                        <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                    </div>
                    <div class="select-none">Remember Me</div>
                </label>
                <div class="flex justify-center items-center mt-2">
                    <button class=" flex justify-center items-center h-10 w-96 bg-birulg rounded-full text-white font-ibm">Sign in</button>
                </div>
                <div class="flex justify-center items-center">
                    <div class="mt-4 mb-2 mr-2 font-bold text-gray-500">Or</div>
                    <a href="#" class="mt-4 mb-2 font-bold text-facebook font-ibm">Forgot Password</a>
                </div>
                <div class="flex justify-center items-center">
                    <div class="justify-center items-center bg-gray-500 h-px w-96"></div>
                </div>
                <div class="flex justify-center items-center mb-8">
                    <div class="mt-2 mb-6 mr-2 font-bold font-ibm text-gray-500">Don't have an account?</div>
                    <a href="#" class="mt-2 mb-6 text-facebook font-bold font-ibm">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


<style>
    input:checked + svg {
        display: block;
    }
</style>

<script>
    function myFunction() {
    window.open("http://localhost/registerFE");
    }
</script>