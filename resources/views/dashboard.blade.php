<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section id="profile" class="pt-32">
        <div class="flex justify-center">
            <div class="flex flex-col lg:flex-row justify-center w-4/5 lg:w-2/3 p-4">
                <div class="lg:w-1/2 flex flex-col">
                    <h2 class="text-2xl font-semibold text-center lg:text-left">Selamat datang 👋,</h2>
                    <h1 class="text-4xl lg:text-6xl font-bold text-center lg:text-left my-5 lg:my-0">SMA Santa Angela</h1>
                    <h2 class="text-2xl font-normal mt-3 text-center lg:text-left">Terakreditasi A</h2>
                    <p class="mt-9 mb-10 text-base text-center lg:text-justify ">Dengan dijiwai Spiritualitas Santa Angela, mewujudkan komunitas pembelajar inovatif berbasis ICT dan Sains yang unggul dalam menghayati dan melaksanakan “Servite et Amate” sehingga mampu berperan dan bermakna dalam kehidupan.</p>
                    <div class="text-center lg:text-left lg:w-1/2">
                        <a href="{{ route('reports.index') }}" class="text-base lg:text-xl py-2 px-6 rounded-full text-white bg-black hover:bg-davys-grey transition-all duration-300 ease-in-out drop-shadow-md">Reports</a>
                    </div>
                </div>
                <div class="lg:w-1/2 flex items-center justify-center mt-10 lg:mt-0">
                    <img src="/img/dashboard.jpg" alt="" class="lg:h-[330px] drop-shadow-md">
                </div>
            </div>
        </div>
    </section>
    <section id="about-me" class="pt-32">
        <div class="flex justify-center">
            <div class="flex flex-col lg:flex-row justify-center items-center w-full lg:w-2/3">
                <div class="w-4/5 flex flex-col lg:p-4">
                    <h1 class="text-3xl font-bold lg:text-left text-center">Serviam 🌟</h1>
                    <p class="mt-5 mb-16 text-base lg:text-justify text-center">Warna dasar hijau menyatan PENGHARAPAN DAN CITA-CITA yang luhur. Gugus bintang beruang kecil (Ursa Minor). Ursula: menyatakan KESAYANGAN (dituturkan dari kata URSUS)</p>
                </div>
                <div class="w-4/5 flex flex-col lg:p-4">
                    <h1 class="text-3xl font-bold lg:text-left text-center">Nasehat St. Angela 🔠</h1>
                    <p class="mt-5 mb-16 text-base lg:text-justify text-center">"Lihatlah betapa cinta kasih dan keserasian menjadi tanda yang pasti bahwa seseorang berada di jalan yang benar dan berkenan kepada Allah. (Warisan 10:12)"</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white items-center flex flex-col lg:flex-row justify-between lg:justify-around bg-black py-6 drop-shadow-md px-10 mt-32">
        <h5 class="text-2xl lg:text-4xl font-bold mb-3 lg:mb-0">alessandroryo</h5>
        <h6 class="text-xs text-center lg:text-sm">Created by <span class="font-semibold">@alessandroyo</span> using <a href="https://tailwindcss.com/" class="text-cyan-500 font-semibold">Tailwind CSS</a></h6>
    </footer>

    <a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-granite-grey p-4 hover:animate-pulse" id="to-top">
        <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
    </a>
</x-app-layout>
