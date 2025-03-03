<?= $this->include('layouts/header') ?>

<section class="mx-auto max-w-[1536px] lg:px-4 mt-12 md:mt-24 bg-center h-[600px] text-white bg-red ">
    <div style="background-image: url('images/hero-bg.png');"
        class="px-4 lg:mx-16 lg:rounded-[40px] h-full bg-cover bg-center bg-black">
        <div class="h-full flex flex-col justify-center items-center gap-4 text-center" data-aos="fade-up">
            <div class="flex flex-col gap-3" data-aos="fade-up">
                <figure class="flex flex-col items-center">
                    <img src="images/logo_himaif.png" alt="logo-himaif" class="mb-8 w-14 md:w-16 lg:w-20">
                    <figcaption class="text-3xl md:text-4xl lg:text-5xl font-bold"><span
                            class="text-[#0077CC]">HIMASIS</span>
                       STMI</figcaption>
                </figure>
                <h1 class="text-xl md:text-3xl font-semibold">Himpunan Mahasiswa Sistem Informasi Industri Otomotif
                <br>    
                Politeknik STMI Jakarta
                </h1>
            </div>
            <!-- tulisan dll -->
            <p class="md:text-xl inline-block max-w-2xl mb-8 mb:mt-12" data-aos="fade-up" data-aos-delay="100">
                </p>

            <a href="#selengkapnya"
                class="bg-[#0077CC] px-7 py-2 text-white rounded-lg transform transition-transform duration-150 active:scale-95">Selengkapnya</a>
        </div>
    </div>
</section>



<section
    class="mx-auto scroll-mt-48 flex flex-col items-center max-w-[1536px] px-6 md:px-10 lg:px-20 gap-8 md:gap-16 mt-12 md:mt-16 "
    data-aos="fade-up" id="selengkapnya">
    <div class="text-center" data-aos="fade-up">
        <p class="font-semibold">Divisi Kami</p>
        <h2 class="inline-block max-w-2xl font-bold text-xl md:text-3xl text-[#0077CC]">
            Penjelasan Tugas dan Fungsi Setiap Divisi di Himpunan Mahasiswa Sistem Informasi Industri Otomotif
        </h2>
    </div>
    <div class="grid grid-cols-12 w-full justify-center gap-6 lg:gap-x-16 lg:gap-y-12 text-pretty">

        <div class="col-span-12 place-self-center flex flex-col justify-start max-w-80 lg:max-w-[380px] text-center lg:text-left gap-2 md:col-span-4"
            imgsrc="svg/pendidikan.svg" imgalt="icon-pendidikan" title="Pendidikan"
            description="Divisi Pendidikan bertanggung jawab dalam mengurus aspek yang berkaitan dengan akademis mahasiswa program studi Informatika."
            data-aos="fade-up" data-aos-delay="100">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="w-11 bg-[#0077CC] rounded-full p-2">
                    <img src="svg/pendidikan.svg" alt="icon-pendidikan" class="w-full">
                </div>
                <p class="text-lg font-bold md:text-2xl">Akademik</p>
            </div>
            <div>
                <p>Divisi Akademik bertanggung jawab dalam mengurus aspek yang berkaitan dengan akademis
                    mahasiswa program studi Sistem Informasi Industri Otomotif.</p>
            </div>
        </div>


        <div class="col-span-12 place-self-center flex flex-col justify-start max-w-80 lg:max-w-[380px] text-center lg:text-left gap-2 md:col-span-4 order-first md:order-none"
            imgsrc="svg/inti.svg" imgalt="icon-inti" title="PSDM" description="PSDM bertanggung jawab untuk mengawasi dan mengarahkan seluruh aspek yang ada dalam Himpunan
        Mahasiswa Informatika." data-aos="fade-up" data-aos-delay="200">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="w-11 bg-[#0077CC] rounded-full p-2">
                    <img src="svg/inti.svg" alt="icon-inti" class="w-full">
                </div>
                <p class="text-lg font-bold md:text-2xl">PSDM</p>
            </div>
            <div>
                <p>PSDM bertanggung jawab untuk mengawasi dan mengarahkan seluruh aspek sumber daya manusia yang ada dalam Himasis.</p>
            </div>
        </div>

        <div class="col-span-12 place-self-center flex flex-col justify-start max-w-80 lg:max-w-[380px] text-center lg:text-left gap-2 md:col-span-4"
            imgsrc="svg/mibat.svg" imgalt="icon-mibat" title="Minat dan Bakat" description="Divisi Minat dan Bakat bertanggung jawab dalam mewadahi minat dan bakat mahasiswa program studi
                    Informatika." data-aos="fade-up" data-aos-delay="400">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="w-11 bg-[#0077CC] rounded-full p-2">
                    <img src="svg/mibat.svg" alt="icon-mibat" class="w-full">
                </div>
                <p class="text-lg font-bold md:text-2xl">Inti</p>
            </div>
            <div>
                <p>BPH inti bertanggung jawab untuk mengawasi dan mengarahkan seluruh aspek yang ada dalam Himasis.</p>
            </div>
        </div>


        <div class="col-span-12 place-self-center flex flex-col justify-start max-w-80 lg:max-w-[380px] text-center lg:text-left gap-2 md:col-span-6"
            imgsrc="svg/kesma.svg" imgalt="icon-kesma" title="Kesejahteraan Mahasiswa" description="Divisi Kesejahteraan Mahasiswa bertanggung jawab untuk menjaga kesejahteraan mahasiswa dan lingkungan
                    kampus program studi Informatika." data-aos="fade-up" data-aos-delay="600">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="w-11 bg-[#0077CC] rounded-full p-2">
                    <img src="svg/kesma.svg" alt="icon-kesma" class="w-full">
                </div>
                <p class="text-lg font-bold md:text-2xl">KWU</p>
            </div>
            <div>
                <p>Divisi Kewirahusaan  bertanggung jawab untuk menjaga kesejahteraan mahasiswa dan
                    lingkungan
                    kampus program studi Informatika. </p>
            </div>
        </div>


        <div class="col-span-12 place-self-center flex flex-col justify-start max-w-80 lg:max-w-[380px] text-center lg:text-left gap-2 md:col-span-6"
            imgsrc="svg/humas.svg" imgalt="icon-humas" title="Hubungan Masyarakat" description="Divisi Hubungan Masyarakat bertanggung jawab atas penyebaran dan penerimaan informasi serta
                    pengabdian masyarakat program studi Informatika." data-aos="fade-up" data-aos-delay="800">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="w-11 bg-[#0077CC] rounded-full p-2">
                    <img src="svg/humas.svg" alt="icon-humas" class="w-full">
                </div>
                <p class="text-lg font-bold md:text-2xl">Medinkom</p>
            </div>
            <div>
                <p>Divisi Medinkom bertanggung jawab atas penyebaran dan penerimaan informasi serta
                    pengabdian masyarakat program studi Informatika. </p>
            </div>
        </div>
    </div>
</section>


<section
    class="mx-auto flex flex-col items-center max-w-[1536px] px-6 md:px-10 lg:px-20 gap-8 md:gap-16 mt-12 md:mt-16 lg:mt-28 ">
    <div class="text-center" data-aos="fade-up">
        <p class="font-semibold">Program Kerja Kami</p>
        <h2 class="inline-block max-w-2xl font-bold text-xl md:text-3xl text-[#0077CC]">
            Kegiatan dan Aktivitas Kami di Himpunan Mahasiswa Sistem Informasi Industri Otomotif
        </h2>
    </div>
    <div class="flex flex-col md:grid md:grid-cols-12 gap-10">

        <div class="order-last md:order-first md:col-span-3 lg:col-span-4 " data-aos="fade-up">
            <div class="mb-2 md:mb-4">
                <h3 class="font-bold text-lg md:text-2xl">Periode</h3>
            </div>
            <div class="flex flex-col gap-8 max-h-[600px] overflow-y-auto text-justify">
                <div class="flex md:flex-col lg:flex-row gap-3 lg:gap-6" date="2024-11-26"
                    title="Open Recruitment Fungsionaris HIMAIF 2025"
                    description="<p>HIMAIF akan menyelenggarakan Open Recruitment Fungsionaris untuk periode kepengurusan tahun 2025. Open Recruitment ini dijadwalkan berlangsung pada bulan November 2024, dengan pembagian lini masa seperti berikut: </p><p> 
<br>
</p>

<ol>  
<li>• 26 - 28 November 2024 : Pendaftaran Calon Fungsionaris 2025</li>
<li>• 2 - 4 Desember 2024 : Wawancara Calon Fungsionaris 2025</li>
<li>• 5 Desember 2024 : Pengumuman Fungsionaris 2025</li>
</ol><p>
<br>
</p>

<p>Tahap ini bertujuan untuk memilih anggota yang akan mengisi berbagai posisi dalam struktur organisasi HIMAIF. Kami menunggu partisipasi dan kontribusi teman-teman angkatan 2023 dan juga 2024 untuk menjadi bagian dari Fungsionaris HIMAIF periode 2025</p>"
                    url="https://himaif-udayana.com/news/oprec-fungsionaris-himaif-2025" data-aos="fade-right"
                    data-aos-delay="150">
                    <div class="max-w-20 w-full text-center">
                        <p class="py-4 rounded-md bg-[#0077CC] text-white shadow-sm">
                            26 Nov</p>
                    </div>
                    <div class="flex flex-col justify-between">
                        <div>
                            <h4 class="font-bold md:text-lg capitalize">Open Recruitment Fungsionaris HIMAIF
                                2025</h4>
                            <p class="text-sm text-gray-500">HIMAIF akan menyelenggarakan Open Recruitment
                                Fungsionaris untuk periode kepengurusan tahun 2025. Open Recruitment ini
                                dijadwalkan...</p>
                        </div>
                        <div class="flex items-center text-[#0077CC]">
                            <a href="https://himaif-udayana.com/news/oprec-fungsionaris-himaif-2025"
                                class="text-sm">Selengkapnya</a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex md:flex-col lg:flex-row gap-3 lg:gap-6" date="2025-02-04"
                    title="Open Recruitment Kepanitiaan SUPREMASI XVIII" description="<p>Halo Sobat Informatika🚀</p>

<p>Bagi kalian yang ingin memiliki pengalaman dalam suatu kepanitiaan. SUPREMASI XVIII dengan ini membuka recruitment panitia bagi seluruh mahasiswa aktif Program Studi Informatika pada:</p>

<p>
<br></p>

<p>📅 : 4 Februari - 6 Februari 2024 </p>
<p>🔗 : https://bit.ly/OprecSUPREMASIXVIII </p>
<p>💼 : https://bit.ly/FormulirPendaftaranSUPREMASIXVIII</p>

<p>Adapun jobdesc dari setiap sie sebagai berikut:  https://bit.ly/JobdescSieSUPREMASIXVIII
</p>

<p>Daftarkan dirimu dan mari bersama berkontribusi untuk menyukseskan kegiatan SUPREMASI XVIII❗🚀</p>

<p>❗Don't miss SUPREMASI XVIII❗</p>

<p>
Keep following our instagram @supremasinformatika
- 
Contact Person
📲 Landip
WA : 088706509153
📲 There
WA : 082272346633</p>" url="https://himaif-udayana.com/news/oprec-panitia-supremasi-xviii" data-aos="fade-right"
                    data-aos-delay="150">
                    <div class="max-w-20 w-full text-center">
                        <p class="py-4 rounded-md bg-[#0077CC] text-white shadow-sm">
                            04 Feb</p>
                    </div>
                    <div class="flex flex-col justify-between">
                        <div>
                            <h4 class="font-bold md:text-lg capitalize">Open Recruitment Kepanitiaan SUPREMASI
                                XVIII</h4>
                            <p class="text-sm text-gray-500">Halo Sobat Informatika🚀

                                Bagi kalian yang ingin memiliki pengalaman dalam suatu kepanitiaan. SUPREMASI
                                XVIII dengan...</p>
                        </div>
                        <div class="flex items-center text-[#0077CC]">
                            <a href="https://himaif-udayana.com/news/oprec-panitia-supremasi-xviii"
                                class="text-sm">Selengkapnya</a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:col-span-9 lg:col-span-8" data-aos="fade-up">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6">

                <div style="background-image: url('images/optimus.webp');"
                    class="h-[320px] rounded-xl px-6 relative bg-cover flex items-end py-6" data-aos="fade-up"
                    data-aos-delay="100" url="images/optimus.webp" title="OPTIMUS 2024" description="Pengenalan kehidupan lingkungan kampus, pengakraban, dan pelatihan
                programming untuk mahasiswa baru program studi Informatika.">
                    <div class=" text-white relative z-10 flex flex-col gap-2">
                        <h3 class="text-xl font-bold">OPTIMUS 2024</h3>
                        <p class="text-sm">Pengenalan kehidupan lingkungan kampus, pengakraban, dan pelatihan
                            programming untuk mahasiswa baru program studi Informatika.</p>
                    </div>
                    <div
                        class="h-full w-full absolute bg-gradient-to-t from-[#000]/80 to-blue-[#000]/0 top-0 left-0 rounded-xl">
                    </div>
                </div>

                <div style="background-image: url('images/kaderisasi-minat-bakat.webp');"
                    class="h-[320px] rounded-xl px-6 relative bg-cover flex items-end py-6" data-aos="fade-up"
                    data-aos-delay="200" url="images/kaderisasi-minat-bakat.webp" title="SURVEI MINAT BAKAT"
                    description="Kegiatan yang bertujuan untuk melakukan pendataan minat dan bakat mahasiswa
                baru di lingkungan Program Studi Informatika.">
                    <div class=" text-white relative z-10 flex flex-col gap-2">
                        <h3 class="text-xl font-bold">SURVEI MINAT BAKAT</h3>
                        <p class="text-sm">Kegiatan yang bertujuan untuk melakukan pendataan minat dan bakat
                            mahasiswa
                            baru di lingkungan Program Studi Informatika.</p>
                    </div>
                    <div
                        class="h-full w-full absolute bg-gradient-to-t from-[#000]/80 to-blue-[#000]/0 top-0 left-0 rounded-xl">
                    </div>
                </div>

                <div style="background-image: url('images/invention.webp');"
                    class="h-[320px] rounded-xl px-6 relative bg-cover flex items-end py-6" data-aos="fade-up"
                    data-aos-delay="300" url="images/invention.webp" title="INVENTION 2023" description="Informatics Festival and Competitions adalah perlombaan yang bertujuan untuk
                menambah wawasan dan kreativitas siswa SMA/SMK/Sederajat serta Mahasiswa seluruh Indonesia.">
                    <div class=" text-white relative z-10 flex flex-col gap-2">
                        <h3 class="text-xl font-bold">INVENTION 2023</h3>
                        <p class="text-sm">Informatics Festival and Competitions adalah perlombaan yang
                            bertujuan untuk
                            menambah wawasan dan kreativitas siswa SMA/SMK/Sederajat serta Mahasiswa seluruh
                            Indonesia.</p>
                    </div>
                    <div
                        class="h-full w-full absolute bg-gradient-to-t from-[#000]/80 to-blue-[#000]/0 top-0 left-0 rounded-xl">
                    </div>
                </div>

                <div style="background-image: url('images/webnas.webp');"
                    class="h-[320px] rounded-xl px-6 relative bg-cover flex items-end py-6" data-aos="fade-up"
                    data-aos-delay="400" url="images/webnas.webp" title="WEBNAS 2023" description="Seminar online yang disiarkan secara langsung dan mengundang pembicara yang
                akan memaparkan materi sesuai dengan tema yang ditentukan.">
                    <div class=" text-white relative z-10 flex flex-col gap-2">
                        <h3 class="text-xl font-bold">WEBNAS 2023</h3>
                        <p class="text-sm">Seminar online yang disiarkan secara langsung dan mengundang
                            pembicara yang
                            akan memaparkan materi sesuai dengan tema yang ditentukan.</p>
                    </div>
                    <div
                        class="h-full w-full absolute bg-gradient-to-t from-[#000]/80 to-blue-[#000]/0 top-0 left-0 rounded-xl">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section
    class="mx-auto flex flex-col items-center max-w-[1536px] px-6 md:px-10 lg:px-20 gap-8 md:gap-12 mt-12 md:mt-16 lg:mt-28"
    data-aos="fade-up">
    <div class="text-center" data-aos="fade-up">
        <p class="font-semibold">Artikel Kami</p>
        <h2 class="inline-block max-w-2xl font-bold text-xl md:text-3xl text-[#0077CC]">
            Berikut ini adalah artikel terbaru yang dibuat oleh himasis
        </h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 place-items-center">
        <div class="p-4 transition-all rounded-xl hover:border hover:rounded-xl border hover:border-[#0077CC] hover:shadow-md h-full"
            imgurl="information/picture/1732980380_supremasi-xvii.png" imgalt="supremasi-xvii"
            kategori="After Event" tanggal="2024-11-30 15:26:20" title="SUPREMASI XVII"
            description="<p>Pada tanggal 14 April 2024, Hari Puncak SUPREMASI XVII sukses dilaksanakan dengan penuh semangat dan antusiasme. Sebagai program kerja besar dari Divisi Minat Bakat HIMAIF, SUPREMASI bertujuan untuk memeriahkan perayaan HUT Prodi Informatika dengan serangkaian kegiatan yang bervariasi dan menarik. Kegiatan dimulai dengan pertandingan dan perlombaan yang melibatkan seluruh civitas akademika Informatika, menciptakan kompetisi sehat dan kebersamaan di antara para peserta. Selain itu, acara FUNDAY menambah keseruan dengan berbagai permainan yang diikuti oleh banyak peserta, menjadikan suasana semakin meriah dan penuh tawa.
<br><br>
Tidak hanya berfokus pada hiburan, SUPREMASI XVII juga mengadakan kegiatan pengabdian masyarakat melalui HemoVolunteer sebuah kegiatan donor darah yang bertujuan untuk membantu sesama sekaligus meningkatkan kesadaran akan pentingnya kontribusi sosial. Rangkaian acara tersebut kemudian ditutup dengan Hari Puncak yang berlangsung dengan sangat meriah, menampilkan penutupan yang berkesan dan menunjukkan suksesnya pelaksanaan seluruh program. Dengan berbagai kegiatan yang telah dilaksanakan, SUPREMASI XVII menjadi ajang yang tidak hanya memeriahkan HUT Prodi Informatika, tetapi juga mempererat solidaritas dan semangat di antara para pesertanya</p>"
            url="supremasi-xvii" data-aos="fade-up" data-aos-delay="200">
            <figure>
                <img src="storage/information/picture/1732980380_supremasi-xvii.png" alt="supremasi-xvii"
                    class="rounded-2xl aspect[3/2]" loading="lazy">
            </figure>
            <div class="flex flex-col gap-2 mt-4">
                <div class="flex items-center gap-2 text-sm">
                    <p class="px-4 py-1 rounded-full bg-[#0077CC] text-white ">After Event</p>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                        </svg>
                        <span>30 Nov 2024</span>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-lg md:text-xl uppercase">SUPREMASI XVII</h4>
                </div>
                <div class="flex gap-4 items-center">
                    <div class="text-sm md:text-base text-justify">
                        <p>Pada tanggal 14 April 2024, Hari Puncak SUPREMASI XVII sukses dilaksanakan dengan
                            penuh semangat dan antusiasme. Sebagai program kerja besar...</p>
                    </div>
                    <div class="border border-[#0077CC] rounded-full p-2 text-[#0077CC]">
                        <a href="https://himaif-udayana.com/blog/supremasi-xvii">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 transition-all rounded-xl hover:border hover:rounded-xl border hover:border-[#0077CC] hover:shadow-md h-full"
            imgurl="information/picture/1732980589_diskusi-akademis.png" imgalt="diskusi-akademis-2024"
            kategori="After Event" tanggal="2024-11-30 15:29:49" title="Diskusi Akademis 2024"
            description="<p>Telah terlaksana kegiatan Diskusi Akademis 2024 pada tanggal 5 Juli 2024. Acara ini merupakan program kerja dari Divisi Hubungan Masyarakat HIMAIF yang bertujuan untuk menjadi wadah bagi mahasiswa Program Studi Informatika dalam menyampaikan pertanyaan, keluhan, serta masukan secara langsung kepada koordinator program studi. Kegiatan ini dirancang untuk menciptakan komunikasi terbuka antara mahasiswa dan pihak program studi, guna meningkatkan kualitas akademis dan hubungan yang lebih baik antara mahasiswa dan dosen. Diskusi melibatkan mahasiswa baru dan lama untuk berbincang langsung dengan koordinator program studi, sehingga setiap angkatan dapat menyampaikan pandangan serta pengalamannya.
<br><br>
Diskusi Akademis memberikan kesempatan bagi mahasiswa untuk mengungkapkan pendapat mereka terkait berbagai aspek yang berhubungan dengan Program Studi Informatika, baik itu terkait bidang akademik, bidang fasilitas, bidang kemahasiswaan, bidang administrasi, maupun dalam penyebaran informasi. Melalui pelaksanaan kegiatan Diskusi Akademis, diharapkan setiap masukan yang disampaikan oleh mahasiswa dapat didiskusikan lebih lanjut untuk mendorong peningkatan kualitas Program Studi Informatika secara keseluruhan. Acara ini pun diharapkan dapat terus berlanjut di masa depan sebagai jembatan aspirasi dan diskusi di lingkungan Informatika Universitas Udayana.</p>"
            url="diskusi-akademis-2024" data-aos="fade-up" data-aos-delay="300">
            <figure>
                <img src="storage/information/picture/1732980589_diskusi-akademis.png"
                    alt="diskusi-akademis-2024" class="rounded-2xl aspect[3/2]" loading="lazy">
            </figure>
            <div class="flex flex-col gap-2 mt-4">
                <div class="flex items-center gap-2 text-sm">
                    <p class="px-4 py-1 rounded-full bg-[#0077CC] text-white ">After Event</p>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                        </svg>
                        <span>30 Nov 2024</span>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-lg md:text-xl uppercase">Diskusi Akademis 2024</h4>
                </div>
                <div class="flex gap-4 items-center">
                    <div class="text-sm md:text-base text-justify">
                        <p>Telah terlaksana kegiatan Diskusi Akademis 2024 pada tanggal 5 Juli 2024. Acara ini
                            merupakan program kerja dari Divisi Hubungan Masyarakat...</p>
                    </div>
                    <div class="border border-[#0077CC] rounded-full p-2 text-[#0077CC]">
                        <a href="https://himaif-udayana.com/blog/diskusi-akademis-2024">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 transition-all rounded-xl hover:border hover:rounded-xl border hover:border-[#0077CC] hover:shadow-md h-full"
            imgurl="information/picture/1732981244_optimus-2024.png" imgalt="optimus-2024"
            kategori="After Event" tanggal="2024-11-30 15:40:44" title="OPTIMUS 2024"
            description="<p>Telah terlaksana hari puncak kegiatan OPTIMUS 2024 pada Minggu, 27 Oktober 2024, yang merupakan bagian dari program tahunan Himpunan Mahasiswa Informatika (HIMAIF) Universitas Udayana. Dengan tema 'Together We Thrive, As One We Strive', kegiatan ini bertujuan meningkatkan solidaritas, kreativitas, dan jiwa kepemimpinan mahasiswa baru. Hari puncak ini menjadi momen bersejarah, di mana peserta diresmikan sebagai bagian dari Keluarga Besar Informatika setelah berhasil melalui rangkaian kegiatan OPTIMUS 2024 dengan penuh semangat dan dedikasi.
<br><br>
Sebelumnya, rangkaian kegiatan OPTIMUS telah dimulai dengan wawancara minat bakat pada 21-22 September 2024, dilanjutkan dengan hari pertama pada 13 Oktober, dan hari kedua pada 20 Oktober. Setiap tahap dirancang untuk melatih hard skill dan soft skill peserta melalui pembekalan materi, sosialisasi, sharing session, presentasi project, hingga games. Dengan terlaksananya kegiatan OPTIMUS 2024, diharapkan mahasiswa baru dapat lebih mudah beradaptasi dengan sistem perkuliahan di Program Studi Informatika, memahami lingkungan akademik, serta menumbuhkan jiwa kepemimpinan dan rasa solidaritas sebagai bagian dari Keluarga Besar Informatika Universitas Udayana.</p>"
            url="optimus-2024" data-aos="fade-up" data-aos-delay="400">
            <figure>
                <img src="storage/information/picture/1732981244_optimus-2024.png" alt="optimus-2024"
                    class="rounded-2xl aspect[3/2]" loading="lazy">
            </figure>
            <div class="flex flex-col gap-2 mt-4">
                <div class="flex items-center gap-2 text-sm">
                    <p class="px-4 py-1 rounded-full bg-[#0077CC] text-white ">After Event</p>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                        </svg>
                        <span>30 Nov 2024</span>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-lg md:text-xl uppercase">OPTIMUS 2024</h4>
                </div>
                <div class="flex gap-4 items-center">
                    <div class="text-sm md:text-base text-justify">
                        <p>Telah terlaksana hari puncak kegiatan OPTIMUS 2024 pada Minggu, 27 Oktober 2024, yang
                            merupakan bagian dari program tahunan Himpunan Mahasiswa...</p>
                    </div>
                    <div class="border border-[#0077CC] rounded-full p-2 text-[#0077CC]">
                        <a href="https://himaif-udayana.com/blog/optimus-2024">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="https://himaif-udayana.com/blog"
        class="px-7 py-2 rounded-lg transform transition-transform duration-150 active:scale-95 bg-[#0077CC] text-white"
        url="index.blog">
        Lihat Artikel lainnya...
    </a>
</section>


<?= $this->include('layouts/footer') ?>