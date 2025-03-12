<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUMC</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

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

<body>
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
                        Binawan University Medical Center (BUMC) adalah institusi pelayanan kesehatan yang didirikan untuk memenuhi kebutuhan masyarakat akan layanan kesehatan holistik yang tersedia di klinik kami. Layanan ini berawal dari pengalaman puluhan tahun Binawan Group dalam bidang pendidikan dan distribusi tenaga kesehatan profesional, yang membuka peluang internasional. Seiring dengan perkembangan layanan kesehatan global, BUMC terus berkembang untuk memberikan pelayanan yang berkualitas. Kami berkomitmen untuk terus berinovasi dan menyediakan layanan yang dapat diandalkan oleh setiap pasien.
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

    <section id="mitra" class="center-page">

        <div class="container mx-auto py-12">
            <h1 class="text-center text-3xl font-bold mb-4">MITRA KAMI</h1>
            <div class="flex justify-center mb-8">
                <div class="w-16 border-t-2 border-gray-400"></div>
            </div>
            <div class="mitra">
                <div class="mitra-track">
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 1: A stylized representation of a tech company logo with abstract shapes and vibrant colors" height="100" src="{{ asset('assets/img/mitra/tiket.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 2: A minimalist logo with a monogram of the company's initials in a modern font" height="100" src="{{ asset('assets/img/mitra/bni.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 3: A logo featuring a globe with interconnected lines representing a global network" height="100" src="{{ asset('assets/img/mitra/fullerton.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 4: A logo with a shield and a checkmark symbolizing security and trust" height="100" src="{{ asset('assets/img/mitra/admedika.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 5: A logo with a stylized leaf and water droplet representing sustainability and eco-friendliness" height="100" src="{{ asset('assets/img/mitra/kemenkes.jpg') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 6: A logo with a gear and wrench symbolizing engineering and technical services" height="100" src="{{ asset('assets/img/mitra/halodoc.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 7: A logo with a stylized mountain and sun representing adventure and travel" height="100" src="{{ asset('assets/img/mitra/mandiri.png') }}" width="150" />
                    </div>
                    <!-- Repeat the logos to create a seamless loop -->
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 1: A stylized representation of a tech company logo with abstract shapes and vibrant colors" height="100" src="{{ asset('assets/img/mitra/tiket.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 2: A minimalist logo with a monogram of the company's initials in a modern font" height="100" src="{{ asset('assets/img/mitra/bni.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 3: A logo featuring a globe with interconnected lines representing a global network" height="100" src="{{ asset('assets/img/mitra/fullerton.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 4: A logo with a shield and a checkmark symbolizing security and trust" height="100" src="{{ asset('assets/img/mitra/admedika.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 5: A logo with a stylized leaf and water droplet representing sustainability and eco-friendliness" height="100" src="{{ asset('assets/img/mitra/kemenkes.jpg') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 6: A logo with a gear and wrench symbolizing engineering and technical services" height="100" src="{{ asset('assets/img/mitra/halodoc.png') }}" width="150" />
                    </div>
                    <div class="mit flex justify-center items-center p-4 bg-white shadow-md rounded-lg">
                        <img alt="Client logo 7: A logo with a stylized mountain and sun representing adventure and travel" height="100" src="{{ asset('assets/img/mitra/mandiri.png') }}" width="150" />
                    </div>
                </div>
            </div>

            <style>
                .mitra {
                    display: flex;
                    overflow: hidden;
                    width: 100%;
                    position: relative;
                }

                .mitra-track {
                    display: flex;
                    width: max-content;
                    animation: scroll 15s linear infinite;
                }

                .mit {
                    min-width: 150px;
                    margin: 0 15px;
                }

                @keyframes scroll {
                    from {
                        transform: translateX(0);
                    }

                    to {
                        transform: translateX(-50%);
                    }
                }
            </style>
        </div>
        </div>
        </div>























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

                    <!-- Doctor Specialis Penyakit Dalam 1 Dr Nabila Hasan -->
                    <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                                <img alt="Portrait of dr. Dewi Kartika SpOG" class="w-full h-full object-cover" height="100"
                                    src="https://storage.googleapis.com/a1aa/image/hZ44ZRbjfiiB4ykM-EsrMoYRQaCT8-fzhAb1jVPXgKI.jpg" width="100" />
                            </div>
                        </div>

                        <h2 class="text-xl font-bold">dr. Nabila Hasan, Sp.PD</h2><br>
                        <p class="text-gray-600 mb-4">Dokter Spesialis Kandungan</p>

                        <!-- Button to trigger modal -->
                        <button type="button" class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center"
                            data-toggle="modal" data-target="#exampleModalCenter">
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

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;"> <!-- Reduce width -->
                            <div class="modal-content">
                                <div class="modal-header text-center" style="display: flex; justify-content: center; width: 100%;">
                                    <h5 class="modal-title text-center" id="exampleModalLongTitle" style="flex-grow: 1; text-align: center;">Jadwal Dokter</h5>
                                </div>
                                <div class="modal-body text-center">
                                    <p><strong>On Call</strong> (dengan perjanjian)</p>
                                    <p>Silakan hubungi kami untuk membuat janji temu.</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Dokter Umum -->
                    <!-- Doctor 1 Dr Nadiah -->
                    <!-- Jadwal: (Rabu & Jumat, Jam 13.00 - 17.00 WIB) & (Sabtu, Jam 09.00 - 14.00 WIB) -->
                    <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                                <img alt="Portrait of dr. William Faisal, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/sOVCW8MnuVlUS4BHQvZiFVGZ6O5s7TkS4VIvtYsxPGA.jpg" width="100" />
                            </div>
                        </div>

                        <h2 class="text-xl font-bold">Dr. Nadiah, M.Si </h2><br>
                        <p class="text-gray-600 mb-4">Dokter Umum</p>

                        <!-- Button to trigger modal -->
                        <button type="button" class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center"
                            data-toggle="modal" data-target="#docnadiah">
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

                    <!-- Modal -->
                    <div class="modal fade" id="docnadiah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;"> <!-- Reduce width -->
                            <div class="modal-content">
                                <div class="modal-header text-center" style="display: flex; justify-content: center; width: 100%;">
                                    <h5 class="modal-title text-center" id="exampleModalLongTitle" style="flex-grow: 1; text-align: center;">Jadwal Dokter</h5>
                                </div>
                                <div class="modal-body text-center">
                                    <p><strong>Rabu & Jumat: </strong>13.00 - 17.00 WIB</p>
                                    <p><strong>Sabtu: </strong>09.00 - 14.00 WIB</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doctor 2 Dr Marsha Ruthy Darmawan, Sp Rad -->
                    <!-- Jadwal: Senin - Jum’at, Jam 14:00 - 17:00 -->
                    <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                                <img alt="Portrait of dr. William Faisal, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/sOVCW8MnuVlUS4BHQvZiFVGZ6O5s7TkS4VIvtYsxPGA.jpg" width="100" />
                            </div>
                        </div>

                        <h2 class="text-xl font-bold">Dr Marsha Ruthy Darmawan, Sp Rad</h2>
                        <p class="text-gray-600 mb-4">Dokter Umum</p>

                        <!-- Button to trigger modal -->
                        <button type="button" class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center"
                            data-toggle="modal" data-target="#docmarsha">
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

                    <!-- Modal -->
                    <div class="modal fade" id="docmarsha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;"> <!-- Reduce width -->
                            <div class="modal-content">
                                <div class="modal-header text-center" style="display: flex; justify-content: center; width: 100%;">
                                    <h5 class="modal-title text-center" id="exampleModalLongTitle" style="flex-grow: 1; text-align: center;">Jadwal Dokter</h5>
                                </div>
                                <div class="modal-body text-center">
                                    <p><strong>Senin - Jumat: </strong>14:00 - 17:00 WIB</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Doctor 3 dr Ambun Suri, MARS -->
                    <!-- Jadwal: Selasa, Kamis, Jum’at, Jam 09.00 - 14.00 WIB -->
                    <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                                <img alt="Portrait of dr. William Faisal, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/sOVCW8MnuVlUS4BHQvZiFVGZ6O5s7TkS4VIvtYsxPGA.jpg" width="100" />
                            </div>
                        </div>

                        <h2 class="text-xl font-bold">dr Ambun Suri, MARS</h2><br>
                        <p class="text-gray-600 mb-4">Dokter Umum</p>

                        <!-- Button to trigger modal -->
                        <button type="button" class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center"
                            data-toggle="modal" data-target="#docambun">
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

                    <!-- Modal -->
                    <div class="modal fade" id="docambun" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;"> <!-- Reduce width -->
                            <div class="modal-content">
                                <div class="modal-header text-center" style="display: flex; justify-content: center; width: 100%;">
                                    <h5 class="modal-title text-center" id="exampleModalLongTitle" style="flex-grow: 1; text-align: center;">Jadwal Dokter</h5>
                                </div>
                                <div class="modal-body text-center">
                                    <p><strong>Selasa: </strong>09:00 - 14:00 WIB</p>
                                    <p><strong>Kamis: </strong>09:00 - 14:00 WIB</p>
                                    <p><strong>Jumat: </strong>09:00 - 14:00 WIB</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doctor Gigi -->
                    <!-- Doctor 1 drg. Asri Insani Larasati -->
                    <!-- Jadwal: Sabtu, Jam 10.00 - 14.00 WIB -->
                    <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                                <img alt="Portrait of dr. William Faisal, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/sOVCW8MnuVlUS4BHQvZiFVGZ6O5s7TkS4VIvtYsxPGA.jpg" width="100" />
                            </div>
                        </div>

                        <h2 class="text-xl font-bold">drg. Asri Insani Larasati</h2><br>
                        <p class="text-gray-600 mb-4">Dokter Gigi</p>

                        <!-- Button to trigger modal -->
                        <button type="button" class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center"
                            data-toggle="modal" data-target="#docasri">
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

                    <!-- Modal -->
                    <div class="modal fade" id="docasri" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;"> <!-- Reduce width -->
                            <div class="modal-content">
                                <div class="modal-header text-center" style="display: flex; justify-content: center; width: 100%;">
                                    <h5 class="modal-title text-center" id="exampleModalLongTitle" style="flex-grow: 1; text-align: center;">Jadwal Dokter</h5>
                                </div>
                                <div class="modal-body text-center">
                                    <p><strong>Sabtu: </strong>10:00 - 14:00 WIB</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doctor 2 drg. Syifa Al Qushoyyi -->
                    <!-- Jadwal: Senin & Jum’at, Jam 09.00 - 14.00 WIB -->
                    <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                                <img alt="Portrait of dr. William Faisal, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/sOVCW8MnuVlUS4BHQvZiFVGZ6O5s7TkS4VIvtYsxPGA.jpg" width="100" />
                            </div>
                        </div>

                        <h2 class="text-xl font-bold">drg. Syifa Al Qushoyyi</h2><br>
                        <p class="text-gray-600 mb-4">Dokter Gigi</p>

                        <!-- Button to trigger modal -->
                        <button type="button" class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center"
                            data-toggle="modal" data-target="#docsyifa">
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

                    <!-- Modal -->
                    <div class="modal fade" id="docsyifa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;"> <!-- Reduce width -->
                            <div class="modal-content">
                                <div class="modal-header text-center" style="display: flex; justify-content: center; width: 100%;">
                                    <h5 class="modal-title text-center" id="exampleModalLongTitle" style="flex-grow: 1; text-align: center;">Jadwal Dokter</h5>
                                </div>
                                <div class="modal-body text-center">
                                    <p><strong>Senin & Jumat: </strong>09:00 - 14:00 WIB</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doctor 3 drg. Aninda Puspa Hapsari -->
                    <!-- Jadwal: Selasa, Kamis, Jum’at, Jam 09.00 - 14.00 WIB -->
                    <div class="bg-white rounded-lg shadow-lg p-4 text-center">
                        <div class="flex justify-center mb-4">
                            <div class="w-24 h-24 rounded-full border-4 border-[#e0344c] overflow-hidden">
                                <img alt="Portrait of dr. William Faisal, SpPD" class="w-full h-full object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/sOVCW8MnuVlUS4BHQvZiFVGZ6O5s7TkS4VIvtYsxPGA.jpg" width="100" />
                            </div>
                        </div>

                        <h2 class="text-xl font-bold">drg. Aninda Puspa Hapsari</h2><br>
                        <p class="text-gray-600 mb-4">Dokter Gigi</p>

                        <!-- Button to trigger modal -->
                        <button type="button" class="bg-[#e0344c] text-white w-full px-4 py-2 rounded-full mb-2 flex items-center justify-center"
                            data-toggle="modal" data-target="#docaninda">
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

                    <!-- Modal -->
                    <div class="modal fade" id="docaninda" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;"> <!-- Reduce width -->
                            <div class="modal-content">
                                <div class="modal-header text-center" style="display: flex; justify-content: center; width: 100%;">
                                    <h5 class="modal-title text-center" id="exampleModalLongTitle" style="flex-grow: 1; text-align: center;">Jadwal Dokter</h5>
                                </div>
                                <div class="modal-body text-center">
                                    <p><strong>Selasa: </strong>09:00 - 14:00 WIB</p>
                                    <p><strong>Kamis: </strong>09:00 - 14:00 WIB</p>
                                    <p><strong>Jumat: </strong>09:00 - 14:00 WIB</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
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
                    <img height="150" width="150" src="{{ asset("assets/img/favicon.png") }}" alt="Inter Medika Logo" class="mb-4">
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
                <!-- <div>
                    <h3 class="font-bold mb-4">Dapatkan Informasi Terbaru</h3>
                    <form class="space-y-4">
                        <input type="email" placeholder="Email" class="w-full px-4 py-2 text-sm text-gray-700 bg-white rounded-md focus:outline-none">
                        <input type="text" placeholder="Whatsapp" class="w-full px-4 py-2 text-sm text-gray-700 bg-white rounded-md focus:outline-none">
                        <button type="submit" class="w-full px-4 py-2 text-sm font-bold text-white bg-gray-600 rounded-md hover:bg-gray-700">
                            SUBSCRIBE
                        </button>
                    </form>
                </div> -->
            </div>
            <div class="container mx-auto px-4 mt-10 text-center">
                <p class="text-sm">© 2025 Binawan University Mediacal Center | All Rights Reserved</p>
            </div>
            <div class="fixed bottom-4 right-4">
                <a class="text-green text-3xl" href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </footer>
</body>

</html>