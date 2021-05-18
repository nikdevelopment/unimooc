<x-app-layout>
<div class="flex w-full h-14 bg-white justify-between">
    <div class="flex w-96 h-full">
        <div class="flex w-14 h-14 bg-teal justify-center items-center cursor-pointer" id="nav_button">
            <div class="flex w-7 h-7"><x-svg.hamburger /></div>
        </div>
        <div class="flex w-40 h-full bg-gray-300">
        </div>
    </div>
    <div class="flex w-96 h-full bg-green-400"></div>
    <div class="flex w-96 h-full bg-green-400"></div>
</div>

<div class="w-0 md:w-14 xl:w-14 h-full bg-white transform duration-300" id="nav">

</div>
<script>
    var nav_btn = document.getElementById('nav_button');
    var nav = document.getElementById('nav');
    var size;

    function toggleNav(saiz) {
        if(saiz == "sm") {
            nav.classList.toggle("w-56");
        }
        else if(saiz == "md") {
            nav.classList.toggle("md:w-56");
        }
        else if(saiz == "xl") {
            nav.classList.toggle("xl:w-56");
        }
    }

    nav_btn.addEventListener("click", function() {
        toggleNav(size);
    }); 

    document.addEventListener("DOMContentLoaded", function(e) {
        var mql1 = window.matchMedia("(max-width: 768px)");
        function handleMQL1(mql) {
            if (mql.matches) {
                size = "sm";
                if(nav.classList.contains("w-56")) {
                    toggleNav(size);
                }
            }
        }
        mql1.addListener(handleMQL1);
        handleMQL1(mql1);
  
        var mql2 = window.matchMedia("(min-width: 768px) and (max-width: 1280px)");
        function handleMQL2(mql) {
            if (mql.matches) {
                size= "md";
                if(nav.classList.contains("w-56")) {
                    toggleNav("sm");
                }
                if(nav.classList.contains("md:w-56")) {
                    toggleNav(size); 
                }
            }
        }
        mql2.addListener(handleMQL2);
        handleMQL2(mql2);                
    
        var mql3 = window.matchMedia("(min-width: 1280px)");
        function handleMQL3(mql) {
            if (mql.matches) {
                size = "xl";
                if(nav.classList.contains("xl:w-14") && nav.classList.contains("xl:w-56"))
                { }
                else
                {
                    toggleNav(size);
                }
            }
        }
        mql3.addListener(handleMQL3);
        handleMQL3(mql3); 
    });
    
    function showSize() {
        console.log("window.innerWidth: " + window.innerWidth);
    }
    


</script>
</x-app-layout>
