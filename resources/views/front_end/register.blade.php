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
                    <button  class="flex w-72 h-20 justify-center items-center text-5xl  rounded-besar rounded-tl-besar  text-oren font-tulisan">SIGN UP</button>
                    <button onclick="myFunction()" class="flex w-72 h-20 bg-gray-200 justify-center items-center text-5xl  text-birulg cursor-pointer rounded-tr-besar font-tulisan">SIGN IN</button>
                </div>
                <div class="flex justify-center items-center mt-6">
                    <button class=" flex justify-center items-center h-10 w-48 bg-facebook rounded-full text-white font-ibm mr-1"><x-svg.facebook/>Facebook</button>
                    <button class=" flex justify-center items-center h-10 w-48 bg-hijaugoogle rounded-full text-white font-ibm"><x-svg.google/>Google</button>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <button class=" flex justify-center items-center h-10 w-48 bg-black rounded-full text-white font-ibm mr-1"><x-svg.apple/>Apple</button>
                    <button class=" flex justify-center items-center h-10 w-48 bg-outlook rounded-full text-white font-ibm"><x-svg.outlook/>Outlook</button>
                </div>
                <div class="flex justify-center items-center mt-3">
                    <div class="h-10 w-96  relative">
                        <div class="absolute ml-1 w-16 h-10 flex items-center justify-center fill-current text-gray-300">
                            <x-svg.user/>
                        </div>
                        <input type="username" placeholder="Username" class=" flex justify-center items-center text-center h-full w-full bg-white border border-gray-400 rounded-full ">
                    </div>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <div class="h-10 w-96  relative">
                        <div class="absolute w-20 ml-0.05 h-10 flex items-center justify-center fill-current text-gray-300">
                            <x-svg.email/>
                        </div>
                        <input type="email" placeholder="Email Address" class=" flex justify-center items-center text-center h-10 w-96 bg-white border border-gray-400 rounded-full ">
                    </div>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <div class="h-10 w-96 relative">
                        <div class="absolute w-20  h-10 flex items-center justify-center fill-current text-gray-300">
                            <x-svg.password/>
                        </div>
                        <input type="password" placeholder="Password" class=" flex justify-center items-center text-center h-10 w-96 bg-white border border-gray-400 rounded-full">
                    </div>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <div class="h-10 w-96 relative">
                        <div class="absolute w-20  h-10 flex items-center justify-center fill-current text-gray-300">
                            <x-svg.password/>
                        </div>
                        <input type="password" placeholder="Confirm Password" class=" flex justify-center items-center text-center h-10 w-96 bg-white border border-gray-400 rounded-full">
                    </div>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <button class=" flex justify-center items-center h-10 w-96 bg-birulg rounded-full text-white font-ibm font-bold ">Sign in</button   >
                </div>
                <div class="flex justify-center items-center mt-6 mb-3">
                    <div class="mt-2 mb-6 mr-2 font-bold font-ibm text-gray-500">Don't have an account?</div>
                    <a href="#" class="mt-2 mb-6 text-blue-600 font-bold font-ibm">Sign Up</>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>

<script>
    function myFunction() {
    window.open("http://localhost/loginFE");
    }
</script>
