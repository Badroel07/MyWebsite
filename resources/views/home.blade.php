@extends('layouts.app')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHKL</title>
    @include('components.style')
</head>
<body class="bg-gray-50 text-gray-800">
    @section('content')
    <main>
        <!-- Bagian Beranda (Hero) - Telah diubah menjadi RATA KIRI -->
        <section id="beranda" class="py-20 md:py-32 lg:py-40 bg-white relative overflow-hidden">
            <!-- Latar belakang abstrak -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-gray-50 opacity-50 -z-10"></div>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl">
                    <!-- Foto Profil Placeholder (Ganti dengan URL foto Anda) -->
                    <!-- Rata kiri di desktop, rata tengah di mobile -->
                    <img src="https://placehold.co/150x150/4f46e5/ffffff?text=C" alt="Foto Profil Chikal" class="w-36 h-36 rounded-full mb-6 shadow-xl ring-4 ring-blue-200 object-cover mx-auto md:mx-0">
                    
                    <!-- Hapus text-center dari parent, agar rata kiri -->
                    <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-gray-900 mb-4 leading-tight">
                        Halo, Saya <span class="text-blue-600">Chikal</span>
                    </h1>
                    <p class="text-xl sm:text-2xl text-gray-600 mb-8">
                        Mahasiswa <span class="font-semibold text-blue-600">Teknik Informatika</span> | Pengembang Web
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#proyek" class="btn-primary bg-blue-600 text-white py-3 px-8 rounded-full font-semibold shadow-lg hover:bg-blue-700 transition duration-300 text-center">
                            Lihat Proyek Saya
                        </a>
                        <a href="#kontak" class="btn-primary border border-gray-300 text-gray-700 bg-white py-3 px-8 rounded-full font-semibold hover:bg-gray-100 transition duration-300 text-center">
                            Hubungi Saya
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Tentang Saya -->
        <section id="tentang" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12 border-b-4 border-blue-500 inline-block pb-1">Tentang Saya</h2>
                <div class="max-w-3xl mx-auto text-lg text-gray-700 leading-relaxed">
                    <p class="mb-4">
                        Saya **Chikal**, seorang mahasiswa semester 5 di **Teknik Informatika, Institut Teknologi Garut (IT Garut)**. Sejak memulai perkuliahan, saya telah mengembangkan minat yang kuat di bidang pengembangan *software*.
                    </p>
                    <p class="mb-4">
                        Fokus utama saya saat ini adalah menjadi Pengembang Web *Full-Stack* yang handal. Saya aktif mempelajari teknologi terbaru di ranah *front-end* seperti React dan Tailwind CSS, serta mendalami *back-end* menggunakan Python dan NodeJS.
                    </p>
                    <p>
                        Saya selalu antusias dalam mengambil tantangan baru, terutama proyek-proyek yang melibatkan pemecahan masalah kompleks dan pembelajaran mesin. Saya percaya bahwa pendidikan di IT Garut memberikan fondasi yang kokoh untuk karir di bidang teknologi.
                    </p>
                </div>
            </div>
        </section>

        <!-- Bagian Keahlian (Skills) -->
        <section id="keahlian" class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12 border-b-4 border-blue-500 inline-block pb-1">Keahlian Teknis</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-5xl mx-auto">
                    
                    <!-- Skill Card 1: HTML & CSS -->
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-red-500 text-center"><!-- Icon/Emoji Placeholder --> &#128187;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">HTML & CSS</h3>
                        <p class="text-sm text-gray-500 text-center">Struktur dan Styling Dasar.</p>
                    </div>

                    <!-- Skill Card 2: Tailwind CSS -->
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-teal-500 text-center"><!-- Icon/Emoji Placeholder --> &#9981;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Tailwind CSS</h3>
                        <p class="text-sm text-gray-500 text-center">Desain Cepat dan Responsif.</p>
                    </div>

                    <!-- Skill Card 3: JavaScript -->
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-yellow-500 text-center"><!-- Icon/Emoji Placeholder --> &#9733;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">JavaScript</h3>
                        <p class="text-sm text-gray-500 text-center">Logika Web Dinamis.</p>
                    </div>

                    <!-- Skill Card 4: Python -->
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-blue-600 text-center"><!-- Icon/Emoji Placeholder --> &#128013;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Python</h3>
                        <p class="text-sm text-gray-500 text-center">Scripting & Data Science.</p>
                    </div>

                    <!-- Skill Card 5: React.js -->
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-sky-500 text-center"><!-- Icon/Emoji Placeholder --> &#9883;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">React.js</h3>
                        <p class="text-sm text-gray-500 text-center">Pembangunan UI Modern.</p>
                    </div>

                    <!-- Skill Card 6: C++ -->
                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-[1.02]">
                        <div class="text-4xl mb-3 text-indigo-700 text-center"><!-- Icon/Emoji Placeholder --> &#128187;</div>
                        <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">C++</h3>
                        <p class="text-sm text-gray-500 text-center">Dasar Algoritma & Struktur Data.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Bagian Proyek (Projects) -->
        <section id="proyek" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12 border-b-4 border-blue-500 inline-block pb-1">Proyek Terbaru</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Proyek Card 1 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg border border-gray-100">
                        <img src="https://placehold.co/600x400/10b981/ffffff?text=E-Commerce+Mockup" alt="Proyek E-Commerce" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Platform E-Commerce Sederhana</h3>
                            <p class="text-gray-600 text-sm mb-4">Pengembangan *Full-Stack* menggunakan MERN stack (MongoDB, Express, React, Node.js).</p>
                            <div class="space-x-2">
                                <span class="inline-block bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">React</span>
                                <span class="inline-block bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Node.js</span>
                            </div>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold transition duration-300">Lihat Detail &rarr;</a>
                        </div>
                    </div>

                    <!-- Proyek Card 2 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg border border-gray-100">
                        <img src="https://placehold.co/600x400/f59e0b/ffffff?text=AI+Chatbot+Project" alt="Proyek Chatbot AI" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Chatbot Informasi Kampus</h3>
                            <p class="text-gray-600 text-sm mb-4">Menggunakan Python dan model NLP sederhana untuk menjawab pertanyaan umum IT Garut.</p>
                            <div class="space-x-2">
                                <span class="inline-block bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Python</span>
                                <span class="inline-block bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full">NLP</span>
                            </div>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold transition duration-300">Lihat Detail &rarr;</a>
                        </div>
                    </div>

                    <!-- Proyek Card 3 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg border border-gray-100">
                        <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Portofolio+Design" alt="Proyek Desain Web" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Desain Web Responsif</h3>
                            <p class="text-gray-600 text-sm mb-4">Latihan membuat layout modern dengan fokus pada *User Experience* dan Tailwind CSS.</p>
                            <div class="space-x-2">
                                <span class="inline-block bg-teal-100 text-teal-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Tailwind</span>
                                <span class="inline-block bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">JavaScript</span>
                            </div>
                            <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold transition duration-300">Lihat Detail &rarr;</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Bagian Kontak (Contact) -->
        <section id="kontak" class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12 border-b-4 border-blue-500 inline-block pb-1">Mari Berkolaborasi</h2>
                <div class="max-w-xl mx-auto">
                    <p class="text-lg text-gray-700 mb-6">
                        Jika Anda tertarik dengan keahlian dan proyek-proyek saya, atau ingin mendiskusikan peluang kolaborasi, jangan ragu untuk menghubungi saya.
                    </p>
                    <a href="mailto:chikal.itg@email.com" class="btn-primary bg-blue-600 text-white py-3 px-8 rounded-full font-semibold shadow-xl hover:bg-blue-700 transition duration-300 text-lg">
                        Kirim Email Sekarang
                    </a>
                </div>
            </div>
        </section>
    </main>
    @endsection

    <!-- Script JavaScript untuk Navigasi Mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            // Fungsi untuk toggle menu
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Fungsi untuk menutup menu saat link diklik (di mobile)
            window.closeMenu = function() {
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    </script>
</div>
</body>
</html>
