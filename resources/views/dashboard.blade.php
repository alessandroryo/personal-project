<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}

    <section id="profile" class="pt-32">
        <div class="flex justify-center">
            <div class="flex flex-col lg:flex-row justify-center w-4/5 lg:w-2/3 p-4">
                <div class="lg:w-1/2 flex flex-col">
                    <h2 class="text-2xl font-semibold text-center lg:text-left">Hello everyone 👋, I am</h2>
                    <h1 class="text-4xl lg:text-6xl font-bold text-center lg:text-left my-5 lg:my-0">Alessandro Ryo</h1>
                    <h2 class="text-2xl font-normal mt-3 text-center lg:text-left">Student & Developer</h2>
                    <p class="mt-9 mb-10 text-base text-center lg:text-justify ">This is my website to introduce myself, show my coding projects, and the programming language I have used. Feel free to contact me below 👇.</p>
                    <div class="text-center lg:text-left lg:w-1/2">
                        <a href="#contact" class="text-md lg:text-xl py-2 px-6 rounded-full text-white bg-black hover:bg-davys-grey transition-all duration-300 ease-in-out drop-shadow-md">Contact Me</a>
                    </div>
                </div>
                <div class="lg:w-1/2 flex items-center justify-center mt-10 lg:mt-0">
                    <img src="/img/avatar.png" alt="" class="lg:h-[330px] drop-shadow-md">
                </div>
            </div>
        </div>
    </section>
    <section id="about-me" class="pt-32">
        <div class="flex justify-center">
            <div class="flex flex-col lg:flex-row justify-center items-center w-full lg:w-2/3">
                <div class="w-4/5 flex flex-col lg:p-4">
                    <h1 class="text-3xl font-bold lg:text-left text-center">Education 🎓</h1>
                    <p class="mt-5 mb-16 text-base lg:text-justify text-center">I am an undergraduate ICT student from Indonesia at HZ University of Applied Sciences, The Netherlands. My coding and programming skills are from college and different sources.</p>
                </div>
                <div class="w-4/5 flex flex-col lg:p-4">
                    <h1 class="text-3xl font-bold lg:text-left text-center">Motivation 🔥</h1>
                    <p class="mt-5 mb-16 text-base lg:text-justify text-center">My motivation for computers and programming brought me to my current life. I am the type of person who likes to learn something new, as we know that IT is a fast-changing sector.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="pt-32">
        <div class="flex justify-center p-4">
            <div class="flex flex-col justify-center lg:w-2/3 text-center items-center sm:w-1/2">
                <h3 class="lg:text-2xl font-bold text-battleship-grey text-xl">Contact</h3>
                <h2 class="lg:text-5xl font-bold my-5 text-3xl">Contact Me</h2>
                <p class="lg:w-1/2 w-2/3">Feel free to contact me via email or social media.</p>
                <h4 class="mt-16 font-bold text-lg lg:text-2xl">alessandroryo@gmail.com</h4>
                <div class="flex flex-row items-center justify-around w-2/3 lg:w-1/3 mt-8">
                    <a href="https://www.linkedin.com/in/alessandro-javva-ananda-satriyo-877aa5173/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="h-11">
                            <path class="hover:fill-granite-grey" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/alessandroryo/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="h-11">
                            <path class="hover:fill-granite-grey" d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z"/>
                        </svg>
                    </a>
                    <a href="https://github.com/alessandroryo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="h-11">
                            <path class="hover:fill-granite-grey" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm2.218 18.616c-.354.069-.468-.149-.468-.336v-1.921c0-.653-.229-1.079-.481-1.296 1.56-.173 3.198-.765 3.198-3.454 0-.765-.273-1.389-.721-1.879.072-.177.312-.889-.069-1.853 0 0-.587-.188-1.923.717-.561-.154-1.159-.231-1.754-.234-.595.003-1.193.08-1.753.235-1.337-.905-1.925-.717-1.925-.717-.379.964-.14 1.676-.067 1.852-.448.49-.722 1.114-.722 1.879 0 2.682 1.634 3.282 3.189 3.459-.2.175-.381.483-.444.936-.4.179-1.413.488-2.037-.582 0 0-.37-.672-1.073-.722 0 0-.683-.009-.048.426 0 0 .46.215.777 1.024 0 0 .405 1.25 2.353.826v1.303c0 .185-.113.402-.462.337-2.782-.925-4.788-3.549-4.788-6.641 0-3.867 3.135-7 7-7s7 3.133 7 7c0 3.091-2.003 5.715-4.782 6.641z"/>
                        </svg>
                    </a>
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
