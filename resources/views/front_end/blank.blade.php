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
            <div class=" bg-white h-auto w-full max-w-2xl rounded-besar">
                <div class="flex ">
                    <div class="flex w-72 h-20 bg-gray-200 justify-center items-center text-5xl text-birulg rounded rounded-tl-3xl cursor-pointer font-tulisan">SIGN UP</div>
                    <div class="flex w-72 h-20 justify-center items-center text-5xl text-oren cursor-pointer font-tulisan ">SIGN IN</div>
                </div>
                <div class="flex justify-center items-center mt-6">
                    <div class=" flex justify-center items-center h-10 w-96 bg-facebook rounded-full text-white font-ibm">Facebook</div>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <div class=" flex justify-center items-center h-10 w-96 bg-hijaugoogle rounded-full text-white font-ibm">Google</div>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <div class=" flex justify-center items-center h-10 w-96 bg-black rounded-full text-white font-ibm">Apple</div>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <input type="email" placeholder="Email Address" class=" flex justify-center items-center text-center h-10 w-96 bg-white border border-gray-400 rounded-full font-ibm">
                </div>
                <div class="flex justify-center items-center mt-2">
                    <input type="password" placeholder="Password" class=" flex justify-center items-center text-center h-10 w-96 bg-white border border-gray-400 rounded-full font-ibm">
                </div>
                <div class="mt-4">
                    <input class="ml-24" type="checkbox">
                    <label class="mt-4 px-2 font-ibm">Remember Me</label> 
                </div>
                <div class="flex justify-center items-center mt-2">
                    <button class=" flex justify-center items-center h-10 w-96 bg-birulg rounded-full text-white font-ibm">Sign in</button>
                </div>
                <div class="flex justify-center items-center">
                    <div class="mt-4 mb-2 mr-2 font-bold">Or</div>
                    <div class="mt-4 mb-2 font-bold text-facebook font-ibm">Forgot Password</div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="justify-center items-center bg-gray-500 h-px w-96"></div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="mt-2 mb-6 mr-2 font-bold font-ibm">Don't have an account?</div>
                    <div class="mt-2 mb-6 text-facebook font-bold font-ibm">Sign Up</div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
