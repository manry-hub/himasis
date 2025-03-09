    </main>
    <footer class="mt-24 bg-black">
        <div
            class="mx-auto max-w-[1536px] bg-[#071108] grid col-span-1 md:col-span-6 lg:grid-cols-12 gap-6 justify-between py-4 px-6 md:px-10 md:py-6 lg:px-20 lg:py-12  text-white">
            <div class="col-span-6 flex flex-col gap-6">
                <figure class="flex items-center gap-2">
                    <img src="/images/logo-himasis.png" alt="logo-circle-himaif" width="45px">
                    <figcaption class="uppercase text-xl font-bold"><span class="text-[#0077CC]">Himasis</span> STMI
                    </figcaption>
                </figure>
                <div class="lg:w-3/4">
                    <p class="text-sm leading-normal text-pretty"> Himpunan Mahasiwa Sistem Informasi Industri Otomotif yang disingkat menjadi HIMASIS adalah
                        organisasi kemahasiswaan sebagai Lembaga Eksekutif di tingkat Program Studi SIIO</p>
                </div>
                <h2 class="font-bold">Connect With Us</h2>
                <div class="flex gap-2 ">
                    
                    <a href="http://www.linkedin.com/company/himasis-politeknik-stmi-jakarta/">
                        <img src="images/linkedin.png" alt="logo-linkedin" width="36px">
                    </a>
                    <a href="http://www.instagram.com/himasis.poltekstmi/">
                        <img src="/images/ig.png" alt="logo-instagram" width="36px">
                    </a>
                    <a href="http://www.youtube.com/@himasis">
                        <img src="images/yt.png" alt="logo-yotube" width="36px">
                    </a>
                    <a href="https://open.spotify.com/show/4YU5UODxxEuHwg8DlYYMA0">
                        <img src="/images/spotify.png" alt="logo-spotify" width="36px">
                    </a>
                    <a href="https://www.tiktok.com/@himasis.poltekstmi">
                        <img src="/images/tiktok.png" alt="logo-tiktok" width="36px">
                    </a>
                </div>

            </div>

<div class="flex flex-row justify-between gap-20" >
            <div class="col-span-6 md:col-span-3">
                <div>
                    <p class="text-xl font-bold">Navigasi</p>
                </div>
                <ul class="mt-2 font-light flex flex-col gap-1.5 text-sm">
                    <li><a href="http://127.0.0.1:8080"
                            class="hover:underline hover:underline-offset-4">Beranda</a></li>
                    <li><a href="http://127.0.0.1:8080/profile"
                            class="hover:underline hover:underline-offset-4">Tentang Kami</a></li>
                    <li><a href="http://127.0.0.1:8080/article"
                            class="hover:underline hover:underline-offset-4">Artikel</a></li>
                    <li><a href="http://127.0.0.1:8080/blog"
                            class="hover:underline hover:underline-offset-4">Blog</a></li>
                    <li><a href="http://127.0.0.1:8080/matkul"
                            class="hover:underline hover:underline-offset-4">Matkul</a></li>
                    <li><a href="http://127.0.0.1:8080/faq"
                            class="hover:underline hover:underline-offset-4">FAQ</a></li>
                    <li><a href="http://127.0.0.1:8080/contact"
                            class="hover:underline hover:underline-offset-4">Kontak</a></li>
                </ul>
            </div>
            <div class="col-span-6 md:col-span-3">
                <div>
                    <p class="text-xl font-bold">Divisi</p>
                </div>
                <ul class="mt-2 font-light flex flex-col gap-1.5 text-sm">  
                    <li><a href="http://127.0.0.1:8080/divisi#akademik"
                            class="hover:underline hover:underline-offset-4">Akademik</a></li>
                    <li><a href="http://127.0.0.1:8080/divisi#medinkom"
                            class="hover:underline hover:underline-offset-4">Medinkom</a></li>
                    <li><a href="http://127.0.0.1:8080/divisi#psdm"
                            class="hover:underline hover:underline-offset-4">PSDM</a></li>
                    <li><a href="http://127.0.0.1:8080/divisi#kwu"
                            class="hover:underline hover:underline-offset-4">KWU</a></li>
                </ul>
            </div>
        </div>
        </div>
    </footer>

        <button onclick="topFunction()" id="myBtn"
            class="hidden fixed bottom-5 right-8 z-50 bg-[#0077CC] text-white cursor-pointer p-4 rounded-lg transition-all">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-triangle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 1.67a2.914 2.914 0 0 0 -2.492 1.403l-8.11 13.537a2.914 2.914 0 0 0 2.484 4.385h16.225a2.914 2.914 0 0 0 2.503 -4.371l-8.116 -13.546a2.917 2.917 0 0 0 -2.494 -1.408z" /></svg>
        </button>

    <!-- AOS Init -->
    <script src="http://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 480 || document.documentElement.scrollTop > 480) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
</body>
</html>
