<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUMC</title>
    <link rel="icon" href="{{ asset('assets/img/bumc-logo-red.png') }}">

    <!-- Connect tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- Connect CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kontak/kontak.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="flex flex-col min-h-screen">
    <x-navbar />

    <!-- Swiper -->
    <section class="relative min-s-screen pt-24" id="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-bg">
                        <img alt="A scenic view of mountains during sunset with a clear sky" height="1080"
                            src="{{ asset('assets/img/slider-1.jpg') }}" width="1920" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-bg">
                        <img alt="A beautiful beach with turquoise water and white sand" height="1080"
                            src="{{ asset('assets/img/slider-2.jpg') }}" width="1920" />
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination -->
            <!-- <div class="swiper-pagination"></div> -->
            <!-- Swiper Navigation -->
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Swiper
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                preloadImages: true,
                updateOnImagesReady: true,
            });

            // Mobile Menu Toggle
            var menuToggle = document.getElementById('menu-toggle');
            var mobileMenu = document.getElementById('mobile-menu');

            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>

    <section id="tentang-kami" class="center-page">
        <div class="container mx-auto py-12">
            <h1 class="text-center text-3xl font-bold mb-4">TENTANG KAMI</h1>
            <div class="flex justify-center mb-8">
                <div class="w-16 border-t-2 border-gray-400"></div>
            </div>
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-1/2 pr-4 mt-8">
                    <p class="mb-4">
                        Binawan University Medical Center (BUMC) didirikan sebagai jawaban atas berbagai kebutuhan dan kondisi masyarakat yang membutuhkan layanan kesehatan holistik yang dapat diakses kapanpun dan dimanapun. Layanan kesehatan ini didirikan atas dasar pengalaman puluhan tahun sebagai Lembaga Pendidikan dan Distributor Tenaga Kesehatan Profesional yang membuka pintu peluang internasional. Perjalanan waktu membawa BUMC hadir sebagai solusi untuk layanan kesehatan yang banyak belajar dan terinspirasi dari perkembangan layanan kesehatan di berbagai belahan dunia. Dari pembelajaran yang berkelanjutan ini, BUMC menyadari bahwa implementasi teknologi baru sangat penting untuk pelayanan prima serta akurasi hasil pemeriksaan dan tindakan. Oleh karena itu, kami menyediakan berbagai layanan yang mudah diakses dan up to date.
                    </p>
                </div>
                <div class="md:w-1/2 pl-4 mt-8">
                    <div class="mb-8">
                        <h2 class="text-lg font-bold mb-2 text-center">VISI</h2>
                        <hr class="border-t-2 border-red-500 mb-2">
                        <p class="text font-size: var(--text-xl); line-height: var(--text-xl--line-height);">
                            Menjadi pusat pelayanan kesehatan akademis terdepan dengan standar internasional melalui pengembangan penelitian dan penerapan ilmu yang didapat dari Program Studi Universitas Binawan.
                        </p>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold mb-2 text-center">MISI</h2>
                        <hr class="border-t-2 border-red-500 mb-2">
                        <ul class="list-disc pl-5">
                            <li class="mb-2">Memberikan pelayanan kesehatan yang berkualitas dan terbaik dengan mengutamakan kesejahteraan dan kesehatan pasien.</li>
                            <li class="mb-2">Meningkatkan kualitas pelayanan dan standar operasional dengan terus mengembangkan pengetahuan, teknologi, dan sumber daya manusia.</li>
                            <li class="mb-2">Mengembangkan dan menerapkan hasil penelitian ilmu kesehatan yang didapat dari program studi Universitas Binawan.</li>
                            <li class="mb-2">Menjalin kemitraan dengan institusi kesehatan dan akademis dalam rangka pengembangan penelitian dan pelayanan kesehatan.</li>
                            <li class="mb-2">Menyediakan lingkungan kerja yang aman, sehat, dan kondusif bagi karyawan, dokter, serta mahasiswa yang menjalani praktik klinik.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan -->

    <section id="layanan" class="center-page">
        <div class="container mx-auto py-12">
            <h1 class="text-center text-3xl font-bold mb-4">LAYANAN</h1>
            <div class="flex justify-center mb-8">
                <div class="w-16 border-t-2 border-gray-400"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="flex items-start">
                    <img src="{{ asset('assets/icons/human_64px.png') }}" alt="Icon specialis penyakit dalam" class="mr-4" width="50" height="50">
                    <div>
                        <h2 class="text-lg font-bold">SPESIALIS PENYAKIT DALAM</h2>
                        <p class="text-gray-600">Pemeriksaan, diagnosis, dan penanganan berbagai penyakit yang berkaitan dengan organ dalam dan kondisi kesehatan umum.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="{{ asset('assets/icons/molar-tooth.png') }}" alt="Icon of a dentist" class="mr-4" width="50" height="50">
                    <div>
                        <h2 class="text-lg font-bold">DOKTER GIGI</h2>
                        <p class="text-gray-600">Layanan perawatan gigi dan mulut, termasuk pemeriksaan, pembersihan, perbaikan, dan tindakan medis lainnya untuk kesehatan oral.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="{{ asset('assets/icons/health.png') }}" alt="Icon of a general practitioner" class="mr-4" width="50" height="50">
                    <div>
                        <h2 class="text-lg font-bold">DOKTER UMUM</h2>
                        <p class="text-gray-600">Konsultasi medis untuk berbagai keluhan kesehatan, pemeriksaan awal, pengobatan umum, serta rujukan jika diperlukan.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="{{ asset('assets/icons/physiotherapy.png') }}" alt="Icon of a physiotherapist" class="mr-4" width="50" height="50">
                    <div>
                        <h2 class="text-lg font-bold">FISIOTERAPI</h2>
                        <p class="text-gray-600">Terapi untuk meningkatkan fungsi tubuh, mengurangi nyeri, serta membantu pemulihan akibat cedera atau kondisi medis tertentu.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="{{ asset('assets/icons/x-ray.png') }}" alt="Icon of a radiologist" class="mr-4" width="50" height="50">
                    <div>
                        <h2 class="text-lg font-bold">RADIOLOGI</h2>
                        <p class="text-gray-600">Pemeriksaan pencitraan medis untuk membantu diagnosis dan pemantauan kondisi kesehatan dengan teknologi medis terkini.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <img src="{{ asset('assets/icons/first-aid-kit.png') }}" alt="Icon of a medical check-up" class="mr-4" width="50" height="50">
                    <div>
                        <h2 class="text-lg font-bold">MCU</h2>
                        <p class="text-gray-600">Pemeriksaan kesehatan menyeluruh untuk mengetahui kondisi tubuh dan mendeteksi potensi masalah kesehatan lebih dini.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- fasilitas -->

    <section id="fasilitas" class="center-page">
        <div class="container mx-auto py-12">
            <h1 class="text-center text-3xl font-bold mb-4">FASILITAS</h1>
            <div class="flex justify-center mb-8">
                <div class="w-16 border-t-2 border-gray-400"></div>
            </div>

            <!-- Centered Swiper Container -->
            <div class="relative flex justify-center items-center max-w-4xl mx-auto">
                <!-- Navigation Buttons -->
                <div class="swiper-button-prev custom-nav"></div>

                <!-- Swiper Slider -->
                <div class="swiper-fasilitas w-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex justify-center items-center">
                            <img alt="Image 1" class="rounded-lg shadow-md object-cover max-w-xs" src="{{ asset('assets/img/fasilitas/pic1.jpeg') }}" />
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img alt="Image 2" class="rounded-lg shadow-md object-cover max-w-xs" src="{{ asset('assets/img/fasilitas/pic2.jpeg') }}" />
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img alt="Image 3" class="rounded-lg shadow-md object-cover max-w-xs" src="{{ asset('assets/img/fasilitas/pic3.jpeg') }}" />
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img alt="Image 4" class="rounded-lg shadow-md object-cover max-w-xs" src="{{ asset('assets/img/fasilitas/pic4.jpeg') }}" />
                        </div>
                        <div class="swiper-slide flex justify-center items-center">
                            <img alt="Image 5" class="rounded-lg shadow-md object-cover max-w-xs" src="{{ asset('assets/img/fasilitas/lorong.jpeg') }}" />
                        </div>
                    </div>

                    <!-- Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                </div>

                <!-- Navigation Buttons -->
                <div class="swiper-button-next custom-nav"></div>
            </div>
        </div>
    </section>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        /* Geser tombol navigasi agar tidak menutupi gambar */


        .swiper-button-prev {
            left: -40px;
        }

        .swiper-button-next {
            right: -40px;
        }

        /* Mencegah gambar yang tidak aktif terlihat */
        .swiper-slide {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        /* Hanya gambar yang aktif dan di sampingnya yang terlihat */
        .swiper-slide-active,
        .swiper-slide-next,
        .swiper-slide-prev {
            opacity: 1;
        }

        /* Mencegah slide keluar dari batas */
        .swiper-fasilitas {
            overflow: hidden;
        }

        /* Warna pagination bullet */
        .swiper-pagination-bullet {
            background-color: black !important;
            /* Ubah warna bullet jadi hitam */
            width: 10px;
            height: 10px;
            opacity: 0.5;
            transition: opacity 0.3s ease-in-out;
        }

        /* Aktifkan warna bullet yang sedang dipilih */
        .swiper-pagination-bullet-active {
            opacity: 1;
        }
    </style>

    <script>
        var swiper = new Swiper('.swiper-fasilitas', {
            slidesPerView: 3, // Menyesuaikan jumlah gambar yang terlihat
            centeredSlides: true, // Memastikan slide utama berada di tengah
            loop: true, // Agar looping berkelanjutan
            spaceBetween: 20, // Jarak antar gambar
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: false, // Pastikan pagination menampilkan semua bullet
            },
            watchSlidesVisibility: true, // Hanya menampilkan slide yang terlihat
            watchSlidesProgress: true, // Memantau progres slide
        });
    </script>

    <!-- Dokter -->

    <section id="jadwal" class="center-page">
        <div class="container mx-auto py-12">
            <h1 class="text-center text-3xl font-bold mb-4">Jadwal Dokter</h1>
            <div class="flex justify-center mb-8">
                <div class="w-16 border-t-2 border-gray-400"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                <!-- Doctor 1 -->
                <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                            <img alt="Portrait of dr. Dewi Kartika SpOG" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/hZ44ZRbjfiiB4ykM-EsrMoYRQaCT8-fzhAb1jVPXgKI.jpg" width="100" />
                        </div>
                    </div>
                    <h2 class="text-xl font-bold">dr. Nabila Hasan, Sp.PD</h2>
                    <p class="text-gray-600 mb-4">Dokter Spesialis Kandungan</p>
                    <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center">
                        <i class="fas fa-eye mr-2"></i>
                        Lihat Jadwal
                    </button>
                    <a href="https://wa.me/08567997991" target="_blank" rel="noopener referer">
                        <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full flex items-center justify-center">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Reservasi Sekarang
                        </button>
                    </a>
                </div>

                <!-- Doctor 2 -->
                <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                            <img alt="Portrait of dr. William Faisal, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/sOVCW8MnuVlUS4BHQvZiFVGZ6O5s7TkS4VIvtYsxPGA.jpg" width="100" />
                        </div>
                    </div>
                    <h2 class="text-xl font-bold">Dr. Nadiah, M.Si </h2>
                    <p class="text-gray-600 mb-4">Dokter Penyakit Dalam</p>
                    <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center">
                        <i class="fas fa-eye mr-2"></i>
                        Lihat Jadwal
                    </button>
                    <a href="https://wa.me/08567997991" target="_blank" rel="noopener referer">
                        <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full flex items-center justify-center">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Reservasi Sekarang
                        </button>
                    </a>
                </div>

                <!-- Doctor 3 -->
                <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                            <img alt="Portrait of dr. Calvin KM, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/TXk3uVXE4K8-5Uu3YiDFkw2gnGxa3-_joUEit-0sU3M.jpg" width="100" />
                        </div>
                    </div>
                    <h2 class="text-xl font-bold">drg. Asri Insani Larasati</h2>
                    <p class="text-gray-600 mb-4">Dokter Penyakit Dalam</p>
                    <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center">
                        <i class="fas fa-eye mr-2"></i>
                        Lihat Jadwal
                    </button>
                    <a href="https://wa.me/08567997991" target="_blank" rel="noopener referer">
                        <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full flex items-center justify-center">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Reservasi Sekarang
                        </button>
                    </a>
                </div>

                <!-- Doctor 4 -->
                <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                            <img alt="Portrait of dr. Kresna Dharma, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/wRqN-rj0TvA-12taq1kgjdRETUCjFhLFgvonjFfbVV4.jpg" width="100" />
                        </div>
                    </div>
                    <h2 class="text-xl font-bold">drg. Syifa Al Qushoyyi</h2>
                    <p class="text-gray-600 mb-4">Dokter Penyakit Dalam</p>
                    <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center">
                        <i class="fas fa-eye mr-2"></i>
                        Lihat Jadwal
                    </button>
                    <a href="https://wa.me/08567997991" target="_blank" rel="noopener referer">
                        <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full flex items-center justify-center">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Reservasi Sekarang
                        </button>
                    </a>
                </div>

                <!-- Doctor 5 -->
                <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                            <img alt="Portrait of dr. Kresna Dharma, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/wRqN-rj0TvA-12taq1kgjdRETUCjFhLFgvonjFfbVV4.jpg" width="100" />
                        </div>
                    </div>
                    <h2 class="text-xl font-bold">drg. Aninda Puspa Hapsari</h2>
                    <p class="text-gray-600 mb-4">Dokter Penyakit Dalam</p>
                    <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center">
                        <i class="fas fa-eye mr-2"></i>
                        Lihat Jadwal
                    </button>
                    <a href="https://wa.me/08567997991" target="_blank" rel="noopener referer">
                        <button class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full flex items-center justify-center">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Reservasi Sekarang
                        </button>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Contact -->

    <section id="kontak" class="center-page py-10">
        <div class="container mx-auto">
            <h1 class="text-center text-3xl font-bold mb-4">HUBUNGI KAMI</h1>
            <div class="flex justify-center mb-6">
                <div class="w-16 border-t-2 border-gray-400"></div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col md:flex-row">
                <!-- Contact Information -->
                <div class="md:w-1/2 p-4">
                    <h2 class="text-2xl font-bold mb-4">Informasi Kontak</h2>
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold">Alamat</h3>
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            Jl. Dewi Sartika No.25 - 30, Kalibata, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630
                        </p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold">Telepon</h3>
                        <p>
                            <i class="fas fa-phone-alt"></i>
                            0218096222
                        </p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold">WhatsApp</h3>
                        <p>
                            <i class="fab fa-whatsapp"></i>
                            08567997991
                        </p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold">Email</h3>
                        <p>
                            <i class="fas fa-envelope"></i>
                            bumc@binawan.ac.id
                        </p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold">Jam Operasional</h3>
                        <p>
                            <i class="fa-regular fa-clock"></i>
                            08.00 - 17.00 WIB
                        </p>
                    </div>
                </div>
                <!-- Map -->
                <div class="md:w-1/2 p-4">
                    <h2 class="text-2xl font-bold mb-4">Lokasi Kami</h2>
                    <div class="relative w-full h-64 md:h-96">
                        <iframe class="w-full h-full rounded-lg"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0462412341994!2d106.86087277573179!3d-6.257639261267588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f25537ac4cd3%3A0x30c0425b54c795fd!2sBUMC%20Kalibata%20-%20Binawan%20University%20Medical%20Center!5e0!3m2!1sen!2sid!4v1741317788903!5m2!1sen!2sid"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
    </section>


    <!-- Footer -->
    <footer class="relative z-10 bg-gradient-to-r from-gray-600 to-black text-white py-10 clear-both">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between">
            <div class="mb-6 md:mb-0">
                <img height="50" width="150" src="{{ asset("assets/img/favicon.png") }}" alt="Inter Medika Logo" class="mb-4">
                <p class="text-sm">Binawan University Mediacal Center</p>
                <div class="flex space-x-4 mt-4">
                    <a class="text-white" href="https://www.tiktok.com/@klinikbumc.id" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-tiktok"></i></a>
                    <a class="text-white" href="https://www.instagram.com/bumc.id" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="mb-6 md:mb-0">
                <h3 class="font-bold mb-4">Kontak</h3>
                <p class="text-sm">Jl. Dewi Sartika No.25 - 30, Kalibata</p>
                <p class="text-sm"> Kec. Kramat jati, Kota Jakarta Timur</p>
                <p class="text-sm">Daerah Khusus Ibukota Jakarta 13630</p>
                <p class="text-sm mt-4"><i class="fas fa-envelope"></i> bumc@binawan.ac.id</p>
                <p class="text-sm"><i class="fas fa-phone-alt"></i> 021-8096-222</p>
                <p class="text-sm"><i class="fab fa-whatsapp"></i> 0856-7997-991</p>
            </div>
            <div class="mb-6 md:mb-0">
                <h3 class="font-bold mb-4">Menu</h3>
                <ul class="space-y-2">
                    <li><a class="text-sm" href="#">Beranda</a></li>
                    <li><a class="text-sm" href="#">Tentang Kami</a></li>
                    <li><a class="text-sm" href="#">Pelayanan</a></li>
                    <li><a class="text-sm" href="#">Promo</a></li>
                    <li><a class="text-sm" href="#">Jadwal & Reservasi</a></li>
                    <li><a class="text-sm" href="#">Kontak Kami</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-4">Dapatkan Informasi Terbaru</h3>
                <form class="space-y-4">
                    <input type="email" placeholder="Email" class="w-full px-4 py-2 text-sm text-gray-700 bg-white rounded-md focus:outline-none">
                    <input type="text" placeholder="Whatsapp" class="w-full px-4 py-2 text-sm text-gray-700 bg-white rounded-md focus:outline-none">
                    <button type="submit" class="w-full px-4 py-2 text-sm font-bold text-white bg-gray-600 rounded-md hover:bg-gray-700">
                        SUBSCRIBE
                    </button>
                </form>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-10 text-center">
            <p class="text-sm">© 2025 Binawan University Mediacal Center | All Rights Reserved</p>
        </div>
        <div class="fixed bottom-4 right-4">
            <a class="text-white text-3xl" href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>
</body>

</html>