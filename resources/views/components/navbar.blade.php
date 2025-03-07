<div>
    <!-- Navigation Bar -->
    <nav class="bg-white p-6 fixed top-0 left-0 w-full z-50 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center ml-8">
                <!-- Desktop Logo (Hidden on Mobile) -->
                <img alt="Company logo, a stylized representation of the company initials"
                    class="h-16 w-60 hidden md:block"
                    src="{{ asset('assets/img/bumc-logo-red.png') }}" />

                <!-- Mobile Logo (Hidden on Desktop) -->
                <img alt="Mobile logo" class="h-12 w-40 md:hidden block"
                    src="{{ asset('assets/img/bumc-logo-red.png') }}" />
            </div>

            <div class="hidden md:flex space-x-2 ml-10 text-lg">
                <a class="nav-link" href="#slider">Beranda</a>
                <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                <a class="nav-link" href="#layanan">Layanan</a>
                <a class="nav-link" href="#fasilitas">Fasilitas</a>
                <a class="nav-link" href="#jadwal">Jadwal</a>
                <a class="nav-link" href="#kontak">Hubungi Kami</a>
            </div>
            <!-- Hamburger Menu Button -->
            <div class="md:hidden">
                <button id="menu-toggle" type="button-navbar" class="text-black focus:outline-none p-2 border border-gray-400 rounded-md">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <!-- Mobile Menu -->
                <div id="mobile-menu" class="fixed top-[80px] left-0 w-full bg-white shadow-md p-4 z-40 hidden transition-all duration-300">
                    <a class="block py-2 px-4 text-black" href="#slider">Beranda</a>
                    <a class="block py-2 px-4 text-black" href="#tentang-kami">Tentang Kami</a>
                    <a class="block py-2 px-4 text-black" href="#layanan">Layanan</a>
                    <a class="block py-2 px-4 text-black" href="#fasilitas">Fasilitas</a>
                    <a class="block py-2 px-4 text-black" href="#jadwal">Jadwal</a>
                    <a class="block py-2 px-4 text-black" href="#kontak">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var menuToggle = document.getElementById('menu-toggle');
            var mobileMenu = document.getElementById('mobile-menu');

            menuToggle.addEventListener('click', function(event) {
                event.stopPropagation();
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('block'); // Ensures visibility
            });

            document.addEventListener('click', function(event) {
                if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('block');
                }
            });
            menuToggle.addEventListener("click", function(event) {
                console.log("Hamburger clicked!"); // Check if this prints in console
                event.stopPropagation();
                mobileMenu.classList.toggle("hidden");
            });
        });
    </script>
</div>