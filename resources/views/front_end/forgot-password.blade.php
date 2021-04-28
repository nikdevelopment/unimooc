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
<body class="flex w-screen h-screen bg-cover items-center justify-center ">
    <div class="w-full lg:flex">
        <div class="w-full flex items-center justify-center">
            <div class="w-72 h-72 lg:w-full lg:max-w-lg lg:h-auto"><x-svg.logo/></div>
        </div>
        <div class="px-4 flex justify center w-full items-center justify-center mt-4 ">
            <div class="max-w-xl w-full h-auto bg-white shadow-lg rounded-besar rounded-t-besar  mt-4 "> 
                <div class=" text-oren text-5xl text-center mb-4 font-tulisan mt-28">FORGOT PASSWORD?</div>
                <div class="flex text-md justify-center items-center mb-10 font-ibm">You can reset your password now</div>
                <div class="flex justify-center items-center mt-2">
                    <div class="h-10 w-96  relative">
                        <div class="absolute w-20 ml-0.05 h-10 flex items-center justify-center fill-current text-gray-300">
                            <x-svg.email/>
                        </div>
                        <input type="email" placeholder="Email Address" class=" flex justify-center items-center text-center h-10 w-96 bg-white border border-gray-400 rounded-full ">
                    </div>
                </div>
                <div class="flex justify-center items-center mt-2 mb-12">
                    <button class=" flex justify-center items-center h-10 w-96 bg-birulg rounded-full text-white font-ibm font-bold">Reset Password</button>
                </div>  
                <div class="flex justify-center items-center">
                    <div class="justify-center items-center bg-gray-500 h-px w-96"></div>
                </div>
                <div class="flex justify-center items-center mt-4 mb-16">
                    <div class="mt-2 mb-6 mr-2 font-bold font-ibm">Go back</div>
                    <a href="#" class="mt-2 mb-6 text-blue-600 font-bold font-ibm">Sign In</a>
                </div>
                    
            </div>
        </div>
    </div>
    
</body>
</html>
       