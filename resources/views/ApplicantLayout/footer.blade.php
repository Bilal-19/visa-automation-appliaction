<div class="w-full bg-gray-900 text-white flex flex-col md:flex-row justify-center md:p-5 mt-20">
    <div class="w-80 mx-auto md:mx-0 md:w-1/3">
        <img src="{{ asset('images/header_logo.png') }}" alt="logo" class="h-fit">
    </div>

    <div class="w-80 mx-auto md:mx-0 md:w-1/3">
        <h5 class="font-medium text-lg">Quick Links</h5>
        <a href="{{route('Home')}}" class="text-gray-300 text-sm font-light hover:text-teal-500 hover:underline underline-offset-4 block my-1">Home</a>
        <a href="{{route('ApplyForVisa')}}" class="text-gray-300 text-sm font-light hover:text-teal-500 hover:underline underline-offset-4 block my-1">Apply for Visa</a>
        <a href="{{route('FAQs')}}" class="text-gray-300 text-sm font-light hover:text-teal-500 hover:underline underline-offset-4 block my-1">FAQs</a>
        <a href="{{route('ContactUs')}}" class="text-gray-300 text-sm font-light hover:text-teal-500 hover:underline underline-offset-4 block my-1">Contact Us</a>
    </div>

    <div class="w-80 mx-auto md:mx-0 md:w-1/3">
        <h5 class="font-medium text-lg">Social Links</h5>
        <a class="mr-3 text-gray-300" href="#"><i class="fa-brands fa-facebook"></i></a>
        <a class="mr-3 text-gray-300" href="#"><i class="fa-brands fa-instagram"></i></a>
        <a class="mr-3 text-gray-300" href="#"><i class="fa-brands fa-linkedin"></i></a>
    </div>
</div>

@stack('script')
<script>
    document.getElementById("menu-toggle").addEventListener("click", () => {
        document.getElementById("navbar-default").classList.toggle("hidden")
    })
</script>
</body>

</html>
