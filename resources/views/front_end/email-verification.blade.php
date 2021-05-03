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
                <div class="flex justify-center items-center ">
                    <div class="flex mt-10 bg-red w-32 h-32 mb-10 fill-current text-birulg">
                        <x-svg.right/>
                    </div>
                </div>
                <div class=" text-oren text-5xl text-center mb-4 font-tulisan">REGISTRATION<p>COMPLETE SUCCESSFULLY</div>
                <div class="flex text-md justify-center items-center mb-10 font-ibm">Please check your email and verify you email address.</div>
                <div class="flex justify-center items-center ">
                    <button class="w-72 h-14 text-white bg-birulg rounded-full font-ibm font-bold  lg:mb-6 mb-16   ">Resend Verification Email</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
       