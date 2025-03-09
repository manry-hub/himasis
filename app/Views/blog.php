<?= $this->include('layouts/header') ?>

<section class="flex flex-col max-w-[1536px] mx-auto px-6 md:px-10 lg:px-20 gap-6 md:gap-8 mt-20 md:mt-28">
               <div class="text-center" data-aos="fade-up">
                    <p class="font-semibold">Informasi Terkini</p>
                    <h2 class="inline-block max-w-2xl font-bold text-xl md:text-3xl text-[#0077CC]">
                         Informasi Terkini Seputar Himpunan Mahasiswa Sitem Informasi Industri Otomotif
                    </h2>
               </div>
          </section>

          <section class="mx-auto flex flex-col max-w-[1536px] px-6 md:px-10 lg:px-20 gap-4 mt-12 md:mt-16"
               data-aos="fade-up" data-aos-delay="200">
               <div class="">
                    <div class="flex gap-4 items-center">
                         <h3 class="font-bold text-xl md:text-3xl pr-4 border-[#071108] border-r-2">Blog</h3>
                         <p>Blog Terbaru</p>
                    </div>
                    <form action="https://himaif-udayana.com/blog" method="GET"
                         class="flex flex-col md:flex-row gap-2 justify-between my-2">
                         <select name="category" onchange="this.form.submit()"
                              class="gap-2 text-sm md:text-base rounded-lg">
                              <option hidden>Kategori</option>

                              <!-- ganti jadi per periode -->
                              <option value="semua" selected>2025</option>
                              <option value="after_event">2024</option>
                              <option value="prestasi">2023</option>
                         </select>
                    </form>
               </div>
               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-12">

                    <div class="p-4 transition-all rounded-xl hover:border hover:rounded-xl border hover:border-[#0077CC] hover:shadow-md"
                         imgUrl="information/picture/1732980380_supremasi-xvii.png" imgAlt="supremasi-xvii"
                         kategori="After Event" tanggal="2024-11-30 15:26:20" title="SUPREMASI XVII"
                         description="<p>Pada tanggal 14 April 2024, Hari Puncak SUPREMASI XVII sukses dilaksanakan dengan penuh semangat dan antusiasme. Sebagai program kerja besar dari Divisi Minat Bakat HIMAIF, SUPREMASI bertujuan untuk memeriahkan perayaan HUT Prodi Informatika dengan serangkaian kegiatan yang bervariasi dan menarik. Kegiatan dimulai dengan pertandingan dan perlombaan yang melibatkan seluruh civitas akademika Informatika, menciptakan kompetisi sehat dan kebersamaan di antara para peserta. Selain itu, acara FUNDAY menambah keseruan dengan berbagai permainan yang diikuti oleh banyak peserta, menjadikan suasana semakin meriah dan penuh tawa.
<br><br>
Tidak hanya berfokus pada hiburan, SUPREMASI XVII juga mengadakan kegiatan pengabdian masyarakat melalui HemoVolunteer sebuah kegiatan donor darah yang bertujuan untuk membantu sesama sekaligus meningkatkan kesadaran akan pentingnya kontribusi sosial. Rangkaian acara tersebut kemudian ditutup dengan Hari Puncak yang berlangsung dengan sangat meriah, menampilkan penutupan yang berkesan dan menunjukkan suksesnya pelaksanaan seluruh program. Dengan berbagai kegiatan yang telah dilaksanakan, SUPREMASI XVII menjadi ajang yang tidak hanya memeriahkan HUT Prodi Informatika, tetapi juga mempererat solidaritas dan semangat di antara para pesertanya</p>"
                         url="supremasi-xvii" data-aos="fade-up" data-aos-delay="200">
                         <figure>
                              <img src="https://himaif-udayana.com/storage/information/picture/1732980380_supremasi-xvii.png"
                                   alt="supremasi-xvii" class="rounded-2xl aspect[3/2]" loading='lazy'>
                         </figure>
                         <div class="flex flex-col gap-2 mt-4">
                              <div class="flex items-center gap-2 text-sm">
                                   <p class="px-4 py-1 rounded-full bg-[#0077CC] text-white ">After Event</p>
                                   <div class="flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="size-5">
                                             <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <span>30 Nov 2024</span>
                                   </div>
                              </div>
                              <div>
                                   <h4 class="font-bold text-lg md:text-xl uppercase">SUPREMASI XVII</h4>
                              </div>
                              <div class="flex gap-4 items-center">
                                   <div class="text-sm md:text-base text-justify">
                                        <p>Pada tanggal 14 April 2024, Hari Puncak SUPREMASI XVII sukses dilaksanakan
                                             dengan penuh semangat dan antusiasme. Sebagai program kerja besar...</p>
                                   </div>
                                   <div class="border border-[#0077CC] rounded-full p-2 text-[#0077CC]">
                                        <a href="https://himaif-udayana.com/blog/supremasi-xvii">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                  stroke-width="1.5" stroke="currentColor" class="size-4">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                             </svg>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="p-4 transition-all rounded-xl hover:border hover:rounded-xl border hover:border-[#0077CC] hover:shadow-md"
                         imgUrl="information/picture/1732980589_diskusi-akademis.png" imgAlt="diskusi-akademis-2024"
                         kategori="After Event" tanggal="2024-11-30 15:29:49" title="Diskusi Akademis 2024"
                         description="<p>Telah terlaksana kegiatan Diskusi Akademis 2024 pada tanggal 5 Juli 2024. Acara ini merupakan program kerja dari Divisi Hubungan Masyarakat HIMAIF yang bertujuan untuk menjadi wadah bagi mahasiswa Program Studi Informatika dalam menyampaikan pertanyaan, keluhan, serta masukan secara langsung kepada koordinator program studi. Kegiatan ini dirancang untuk menciptakan komunikasi terbuka antara mahasiswa dan pihak program studi, guna meningkatkan kualitas akademis dan hubungan yang lebih baik antara mahasiswa dan dosen. Diskusi melibatkan mahasiswa baru dan lama untuk berbincang langsung dengan koordinator program studi, sehingga setiap angkatan dapat menyampaikan pandangan serta pengalamannya.
<br><br>
Diskusi Akademis memberikan kesempatan bagi mahasiswa untuk mengungkapkan pendapat mereka terkait berbagai aspek yang berhubungan dengan Program Studi Informatika, baik itu terkait bidang akademik, bidang fasilitas, bidang kemahasiswaan, bidang administrasi, maupun dalam penyebaran informasi. Melalui pelaksanaan kegiatan Diskusi Akademis, diharapkan setiap masukan yang disampaikan oleh mahasiswa dapat didiskusikan lebih lanjut untuk mendorong peningkatan kualitas Program Studi Informatika secara keseluruhan. Acara ini pun diharapkan dapat terus berlanjut di masa depan sebagai jembatan aspirasi dan diskusi di lingkungan Informatika Universitas Udayana.</p>"
                         url="diskusi-akademis-2024" data-aos="fade-up" data-aos-delay="300">
                         <figure>
                              <img src="https://himaif-udayana.com/storage/information/picture/1732980589_diskusi-akademis.png"
                                   alt="diskusi-akademis-2024" class="rounded-2xl aspect[3/2]" loading='lazy'>
                         </figure>
                         <div class="flex flex-col gap-2 mt-4">
                              <div class="flex items-center gap-2 text-sm">
                                   <p class="px-4 py-1 rounded-full bg-[#0077CC] text-white ">After Event</p>
                                   <div class="flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="size-5">
                                             <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <span>30 Nov 2024</span>
                                   </div>
                              </div>
                              <div>
                                   <h4 class="font-bold text-lg md:text-xl uppercase">Diskusi Akademis 2024</h4>
                              </div>
                              <div class="flex gap-4 items-center">
                                   <div class="text-sm md:text-base text-justify">
                                        <p>Telah terlaksana kegiatan Diskusi Akademis 2024 pada tanggal 5 Juli 2024.
                                             Acara ini merupakan program kerja dari Divisi Hubungan Masyarakat...</p>
                                   </div>
                                   <div class="border border-[#0077CC] rounded-full p-2 text-[#0077CC]">
                                        <a href="https://himaif-udayana.com/blog/diskusi-akademis-2024">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                  stroke-width="1.5" stroke="currentColor" class="size-4">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                             </svg>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="p-4 transition-all rounded-xl hover:border hover:rounded-xl border hover:border-[#0077CC] hover:shadow-md"
                         imgUrl="information/picture/1732981244_optimus-2024.png" imgAlt="optimus-2024"
                         kategori="After Event" tanggal="2024-11-30 15:40:44" title="OPTIMUS 2024"
                         description="<p>Telah terlaksana hari puncak kegiatan OPTIMUS 2024 pada Minggu, 27 Oktober 2024, yang merupakan bagian dari program tahunan Himpunan Mahasiswa Informatika (HIMAIF) Universitas Udayana. Dengan tema 'Together We Thrive, As One We Strive', kegiatan ini bertujuan meningkatkan solidaritas, kreativitas, dan jiwa kepemimpinan mahasiswa baru. Hari puncak ini menjadi momen bersejarah, di mana peserta diresmikan sebagai bagian dari Keluarga Besar Informatika setelah berhasil melalui rangkaian kegiatan OPTIMUS 2024 dengan penuh semangat dan dedikasi.
<br><br>
Sebelumnya, rangkaian kegiatan OPTIMUS telah dimulai dengan wawancara minat bakat pada 21-22 September 2024, dilanjutkan dengan hari pertama pada 13 Oktober, dan hari kedua pada 20 Oktober. Setiap tahap dirancang untuk melatih hard skill dan soft skill peserta melalui pembekalan materi, sosialisasi, sharing session, presentasi project, hingga games. Dengan terlaksananya kegiatan OPTIMUS 2024, diharapkan mahasiswa baru dapat lebih mudah beradaptasi dengan sistem perkuliahan di Program Studi Informatika, memahami lingkungan akademik, serta menumbuhkan jiwa kepemimpinan dan rasa solidaritas sebagai bagian dari Keluarga Besar Informatika Universitas Udayana.</p>"
                         url="optimus-2024" data-aos="fade-up" data-aos-delay="400">
                         <figure>
                              <img src="https://himaif-udayana.com/storage/information/picture/1732981244_optimus-2024.png"
                                   alt="optimus-2024" class="rounded-2xl aspect[3/2]" loading='lazy'>
                         </figure>
                         <div class="flex flex-col gap-2 mt-4">
                              <div class="flex items-center gap-2 text-sm">
                                   <p class="px-4 py-1 rounded-full bg-[#0077CC] text-white ">After Event</p>
                                   <div class="flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="size-5">
                                             <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <span>30 Nov 2024</span>
                                   </div>
                              </div>
                              <div>
                                   <h4 class="font-bold text-lg md:text-xl uppercase">OPTIMUS 2024</h4>
                              </div>
                              <div class="flex gap-4 items-center">
                                   <div class="text-sm md:text-base text-justify">
                                        <p>Telah terlaksana hari puncak kegiatan OPTIMUS 2024 pada Minggu, 27 Oktober
                                             2024, yang merupakan bagian dari program tahunan Himpunan Mahasiswa...</p>
                                   </div>
                                   <div class="border border-[#0077CC] rounded-full p-2 text-[#0077CC]">
                                        <a href="https://himaif-udayana.com/blog/optimus-2024">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                  stroke-width="1.5" stroke="currentColor" class="size-4">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                             </svg>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="p-4 transition-all rounded-xl hover:border hover:rounded-xl border hover:border-[#0077CC] hover:shadow-md"
                         imgUrl="information/picture/1732981394_invention-2024.png" imgAlt="invention-2024"
                         kategori="After Event" tanggal="2024-11-30 15:43:14" title="INVENTION 2024"
                         description="<p>Pada 3 November 2024, Himpunan Mahasiswa Informatika Universitas Udayana sukses menggelar acara puncak INVENTION 2024, salah satu program kerja Divisi Pendidikan HIMAIF. Dengan tema 'Exploring Creativity Through Technology to Achieve Golden Age', acara ini bertujuan mengasah bakat dan kreativitas generasi muda di bidang teknologi sekaligus mendorong mereka untuk berkompetisi dalam menciptakan solusi-solusi kreatif untuk tantangan nyata di era digital.
<br><br>
Kegiatan yang berlangsung sejak Juni 2024 ini mencakup berbagai kompetisi bergengsi, seperti Infographic Design, Web Design, dan UI/UX Design, yang diikuti oleh total 316 peserta dari seluruh Indonesia. Di mana terdapat <strong>152 peserta</strong> untuk lomba Infographic Design, 66 tim untuk lomba Web Design, dan 98 tim untuk lomba UI/UX Design. Hari puncak INVENTION 2024 dilaksanakan dengan berkolaborasi bersama Webinar Nasional Informatika, menghadirkan presentasi karya terbaik dari finalis dan diskusi inspiratif. Kegiatan INVENTION 2024 membuktikan bahwa teknologi dan kreativitas adalah kombinasi sempurna untuk mencetak inovator masa depan</p>"
                         url="invention-2024" data-aos="fade-up" data-aos-delay="500">
                         <figure>
                              <img src="https://himaif-udayana.com/storage/information/picture/1732981394_invention-2024.png"
                                   alt="invention-2024" class="rounded-2xl aspect[3/2]" loading='lazy'>
                         </figure>
                         <div class="flex flex-col gap-2 mt-4">
                              <div class="flex items-center gap-2 text-sm">
                                   <p class="px-4 py-1 rounded-full bg-[#0077CC] text-white ">After Event</p>
                                   <div class="flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="size-5">
                                             <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <span>30 Nov 2024</span>
                                   </div>
                              </div>
                              <div>
                                   <h4 class="font-bold text-lg md:text-xl uppercase">INVENTION 2024</h4>
                              </div>
                              <div class="flex gap-4 items-center">
                                   <div class="text-sm md:text-base text-justify">
                                        <p>Pada 3 November 2024, Himpunan Mahasiswa Informatika Universitas Udayana
                                             sukses menggelar acara puncak INVENTION 2024, salah satu program kerja
                                             Divisi...</p>
                                   </div>
                                   <div class="border border-[#0077CC] rounded-full p-2 text-[#0077CC]">
                                        <a href="https://himaif-udayana.com/blog/invention-2024">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                  stroke-width="1.5" stroke="currentColor" class="size-4">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                             </svg>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="p-4 transition-all rounded-xl hover:border hover:rounded-xl border hover:border-[#0077CC] hover:shadow-md"
                         imgUrl="information/picture/1732981817_webnas-2024.png" imgAlt="webinar-nasional-2024"
                         kategori="After Event" tanggal="2024-11-30 15:50:17" title="WEBINAR NASIONAL 2024"
                         description="<p>Pada 3 November 2024, Webinar Nasional Informatika 2024 sukses dilaksanakan dengan tema 'Harnessing Artificial Intelligence for Strategic Innovation and Sustainable Growth in Business'. Acara yang dinaungi oleh Divisi Kesejahteraan Mahasiswa HIMAIF Udayana ini menghadirkan dua pembicara utama yang luar biasa yaitu <strong> M. Angga Muttaqien, Co-Founder &amp; CEO Indonesia AI, dan David Alfa, Content Creator &amp; Techpreneur </strong>. Webinar ini memberikan wawasan mendalam mengenai peran kecerdasan buatan dalam mendorong inovasi strategis dan pertumbuhan berkelanjutan dalam dunia bisnis.
<br> <br>
Selama acara, peserta tidak hanya mendengarkan pemaparan materi dari para ahli, tetapi juga terlibat dalam sesi tanya jawab yang interaktif, di mana mereka dapat memperdalam pemahaman tentang penerapan teknologi terkini dalam kehidupan sehari-hari dan dunia profesional. Dengan perspektif yang luas tentang kecerdasan buatan, acara ini memberi wawasan baru kepada peserta tentang cara-cara inovatif untuk beradaptasi dengan kemajuan teknologi yang pesat. Kegiatan ini berhasil menciptakan ruang bagi peserta untuk memperkaya pengetahuan mereka dan menjalin koneksi dengan sesama penggiat teknologi, sambil mempersiapkan diri untuk berkontribusi dalam perkembangan industri teknologi yang semakin berkembang.</p>"
                         url="webinar-nasional-2024" data-aos="fade-up" data-aos-delay="600">
                         <figure>
                              <img src="https://himaif-udayana.com/storage/information/picture/1732981817_webnas-2024.png"
                                   alt="webinar-nasional-2024" class="rounded-2xl aspect[3/2]" loading='lazy'>
                         </figure>
                         <div class="flex flex-col gap-2 mt-4">
                              <div class="flex items-center gap-2 text-sm">
                                   <p class="px-4 py-1 rounded-full bg-[#0077CC] text-white ">After Event</p>
                                   <div class="flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="size-5">
                                             <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <span>30 Nov 2024</span>
                                   </div>
                              </div>
                              <div>
                                   <h4 class="font-bold text-lg md:text-xl uppercase">WEBINAR NASIONAL 2024</h4>
                              </div>
                              <div class="flex gap-4 items-center">
                                   <div class="text-sm md:text-base text-justify">
                                        <p>Pada 3 November 2024, Webinar Nasional Informatika 2024 sukses dilaksanakan
                                             dengan tema &#039;Harnessing Artificial Intelligence for Strategic
                                             Innovation and Sustainable...</p>
                                   </div>
                                   <div class="border border-[#0077CC] rounded-full p-2 text-[#0077CC]">
                                        <a href="https://himaif-udayana.com/blog/webinar-nasional-2024">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                  stroke-width="1.5" stroke="currentColor" class="size-4">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                             </svg>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="p-4 transition-all rounded-xl hover:border hover:rounded-xl border hover:border-[#0077CC] hover:shadow-md"
                         imgUrl="information/picture/1732982034_musma-2024.png" imgAlt="musyawarah-mahasiswa-2024"
                         kategori="After Event" tanggal="2024-11-30 15:53:54" title="Musyawarah Mahasiswa 2024"
                         description="<p>Musyawarah Mahasiswa (Musma) Informatika 2024 telah sukses diselenggarakan pada Sabtu, 16 November 2024, bertempat di Gedung BG 1.1, Kampus Universitas Udayana, Jimbaran. Acara ini dihadiri oleh fungsionaris HIMAIF, calon ketua HIMAIF, serta sejumlah undangan. Kegiatan dimulai dengan sesi debat yang berlangsung secara hybrid, di mana calon ketua HIMAIF memaparkan visi dan misi mereka. Debat ini mencakup sesi pemaparan, pembahasan mosi, tanya jawab panelis, serta diskusi terbuka dengan audiens, yang menghidupkan atmosfer diskusi dan menyaring pemikiran-pemikiran terbaik dari masing-masing calon.
<br><br>
Setelah debat, kegiatan dilanjutkan dengan agenda utama Musma, yaitu pemilihan presidium tetap, pembahasan AD/ART, hingga proses pengesahan dokumen penting tersebut. Diskusi berlangsung produktif dan partisipatif, di mana keputusan kolektif menjadi dasar kesuksesan acara ini. Musma Informatika 2024 tidak hanya menjadi momen strategis dalam menentukan pemimpin baru, tetapi juga menjadi ajang refleksi dan penguatan fondasi organisasi demi keberlanjutan HIMAIF yang lebih baik ke depannya.</p>"
                         url="musyawarah-mahasiswa-2024" data-aos="fade-up" data-aos-delay="700">
                         <figure>
                              <img src="https://himaif-udayana.com/storage/information/picture/1732982034_musma-2024.png"
                                   alt="musyawarah-mahasiswa-2024" class="rounded-2xl aspect[3/2]" loading='lazy'>
                         </figure>
                         <div class="flex flex-col gap-2 mt-4">
                              <div class="flex items-center gap-2 text-sm">
                                   <p class="px-4 py-1 rounded-full bg-[#0077CC] text-white ">After Event</p>
                                   <div class="flex gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="size-5">
                                             <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <span>30 Nov 2024</span>
                                   </div>
                              </div>
                              <div>
                                   <h4 class="font-bold text-lg md:text-xl uppercase">Musyawarah Mahasiswa 2024</h4>
                              </div>
                              <div class="flex gap-4 items-center">
                                   <div class="text-sm md:text-base text-justify">
                                        <p>Musyawarah Mahasiswa (Musma) Informatika 2024 telah sukses diselenggarakan
                                             pada Sabtu, 16 November 2024, bertempat di Gedung BG 1.1, Kampus
                                             Universitas...</p>
                                   </div>
                                   <div class="border border-[#0077CC] rounded-full p-2 text-[#0077CC]">
                                        <a href="https://himaif-udayana.com/blog/musyawarah-mahasiswa-2024">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                  stroke-width="1.5" stroke="currentColor" class="size-4">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                       d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                             </svg>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="mt-6 md:mt-8">

               </div>
          </section>

<?= $this->include('layouts/footer') ?>