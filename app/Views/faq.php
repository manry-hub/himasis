<?= $this->include('layouts/header') ?>

<section class="flex flex-col max-w-[1536px] mx-auto px-6 md:px-10 lg:px-20 mt-20 md:mt-28"
               data-aos="fade-up">
               <div class="text-center" data-aos="fade-up">
                    <p class="font-semibold">Frequently Ask Question</p>
                    <h2 class="inline-block max-w-2xl font-bold text-xl md:text-3xl text-[#0077CC]">
                         Pertanyaan Yang Sering Ditanyakan Kepada Kami
                    </h2>
               </div>

               <div class="w-full mt-12 divide-y divide-[#0077cc]" data-aos="fade-up" data-aos-delay="200">

                    <div x-data="{ isExpanded: false }">
                         <button id="controlsAccordionItemOne" type="button"
                              class="flex w-full items-center justify-between gap-4 py-4 text-left "
                              aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-[#0077CC]' :
            'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                              Berapa lama masa jabatan pengurus HIMAIF?
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                   stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                   :class="isExpanded ? 'rotate-180' : ''">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                         </button>
                         <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                              aria-labelledby="controlsAccordionItemOne" x-collapse>
                              <div class="pb-4 text-sm sm:text-base text-justify">
                                   Lama masa jabatan fungsionaris HIMAIF adalah 1 periode (1 tahun) dan fungsionaris
                                   aktif HIMAIF diperkenankan untuk memperpanjang masa jabatan hingga 3 periode (3
                                   tahun).
                              </div>
                         </div>
                    </div>
                    <div x-data="{ isExpanded: false }">
                         <button id="controlsAccordionItemOne" type="button"
                              class="flex w-full items-center justify-between gap-4 py-4 text-left "
                              aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-[#0077CC]' :
            'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                              Apa saja keuntungan menjadi pengurus HIMAIF?
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                   stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                   :class="isExpanded ? 'rotate-180' : ''">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                         </button>
                         <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                              aria-labelledby="controlsAccordionItemOne" x-collapse>
                              <div class="pb-4 text-sm sm:text-base text-justify">
                                   Bergabung menjadi fungsionaris HIMAIF membuka banyak kesempatan bagi fungsionarisnya
                                   sendiri. HIMAIF Udayana tidak jarang menjalin kerja sama bersama pihak-pihak
                                   eksternal kampus sehingga fungsionaris HIMAIF mendapatkan banyak kesempatan eksklusif
                                   dari para mitra, seperti salah satunya mendapatkan tiket undangan ke event-event
                                   teknologi maupun non teknologi skala regional, nasional, bahkan internasional. Hal
                                   ini tentu dapat membantu fungsionaris HIMAIF Udayana untuk memperluas relasi yang
                                   dapat membantu karir fungsionaris HIMAIF Udayana nantinya.
                                   <br><br>
                                   Bukan hanya itu, fungsionaris aktif HIMAIF Udayana juga berkesempatan untuk
                                   memberikan kontribusi aktifnya dalam membantu program studi Informatika untuk
                                   berkembang ke arah lebih baik serta dapat meningkatkan soft skill maupun hard skill
                                   melalui pelatihan yang diadakan pada acara-acara atau kegiatan-kegiatan internal
                                   HIMAIF Udayana.
                              </div>
                         </div>
                    </div>
                    <div x-data="{ isExpanded: false }">
                         <button id="controlsAccordionItemOne" type="button"
                              class="flex w-full items-center justify-between gap-4 py-4 text-left "
                              aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-[#0077CC]' :
            'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                              Apa saja syarat yang perlu dipenuhi untuk mendaftar kepengurusan HIMAIF?
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                   stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                   :class="isExpanded ? 'rotate-180' : ''">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                         </button>
                         <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                              aria-labelledby="controlsAccordionItemOne" x-collapse>
                              <div class="pb-4 text-sm sm:text-base text-justify">
                                   Calon fungsionaris HIMAIF Udayana wajib merupakan mahasiswa aktif program studi
                                   Informatika Udayana dan telah dinyatakan lulus dalam pelaksanaan kegiatan PKKMB
                                   Universitas, PKKMB Fakultas, LKMM-TD FMIPA, dan OPTIMUS.
                              </div>
                         </div>
                    </div>
                    <div x-data="{ isExpanded: false }">
                         <button id="controlsAccordionItemOne" type="button"
                              class="flex w-full items-center justify-between gap-4 py-4 text-left "
                              aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-[#0077CC]' :
            'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                              Apa diperkenankan jika ingin ganti divisi di tengah periode kepengurusan?
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                   stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                   :class="isExpanded ? 'rotate-180' : ''">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                         </button>
                         <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                              aria-labelledby="controlsAccordionItemOne" x-collapse>
                              <div class="pb-4 text-sm sm:text-base text-justify">
                                   Jika memang memiliki alasan yang kuat dan dengan pertimbangan yang matang, maka
                                   fungsionaris HIMAIF diizinkan untuk pindah divisi di ujung periode jabatan,
                                   <strong>bukan</strong> pada saat pertengahan periode berlangsung.
                              </div>
                         </div>
                    </div>
                    <div x-data="{ isExpanded: false }">
                         <button id="controlsAccordionItemOne" type="button"
                              class="flex w-full items-center justify-between gap-4 py-4 text-left "
                              aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-[#0077CC]' :
            'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                              Apakah diperbolehkan menjadi pengurus di organisasi lain ketika sudah diterima di
                              kepengurusan HIMAIF?
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                   stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                   :class="isExpanded ? 'rotate-180' : ''">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                         </button>
                         <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                              aria-labelledby="controlsAccordionItemOne" x-collapse>
                              <div class="pb-4 text-sm sm:text-base text-justify">
                                   Setelah diterima sebagai fungsionaris HIMAIF, maka fungsionaris aktif HIMAIF tidak
                                   diizinkan untuk menjadi pengurus aktif pada organisasi mahasiswa seperti BEM maupun
                                   DPM baik tingkat fakultas maupun universitas, namun fungsionaris HIMAIF tetap
                                   diizinkan untuk bergabung pada komunitas maupun UKM yang ada di lingkungan
                                   Universitas Udayana.
                              </div>
                         </div>
                    </div>
                    <div x-data="{ isExpanded: false }">
                         <button id="controlsAccordionItemOne" type="button"
                              class="flex w-full items-center justify-between gap-4 py-4 text-left "
                              aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-[#0077CC]' :
            'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                              Apakah memungkinkan untuk bergabung dan diterima dalam kepengurusan HIMAIF dengan minim
                              pengalaman organisasi?
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                   stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                   :class="isExpanded ? 'rotate-180' : ''">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                         </button>
                         <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                              aria-labelledby="controlsAccordionItemOne" x-collapse>
                              <div class="pb-4 text-sm sm:text-base text-justify">
                                   Sangat memungkinkan!! HIMAIF tidak hanya menerima yang sudah berpengalaman
                                   organisasi, tapi juga yang belum pernah sama sekali. Tentunya harus dengan komitmen
                                   ingin belajar dan berkembang dalam organisasi.
                              </div>
                         </div>
                    </div>
                    <div x-data="{ isExpanded: false }">
                         <button id="controlsAccordionItemOne" type="button"
                              class="flex w-full items-center justify-between gap-4 py-4 text-left "
                              aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-[#0077CC]' :
            'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                              Apakah rangkaian kegiatan yang dijalankan oleh kepengurusan HIMAIF akan mengganggu proses
                              perkuliahan di kelas?
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                   stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                   :class="isExpanded ? 'rotate-180' : ''">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                         </button>
                         <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                              aria-labelledby="controlsAccordionItemOne" x-collapse>
                              <div class="pb-4 text-sm sm:text-base text-justify">
                                   Karena HIMAIF adalah himpunan di lingkup program studi Informatika, rangkaian
                                   kegiatan yang dijalankan oleh kepengurusan HIMAIF akan menyesuaikan dengan jadwal
                                   kegiatan perkuliahan mahasiswa program studi Informatika.
                              </div>
                         </div>
                    </div>
                    <div x-data="{ isExpanded: false }">
                         <button id="controlsAccordionItemOne" type="button"
                              class="flex w-full items-center justify-between gap-4 py-4 text-left "
                              aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-[#0077CC]' :
            'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                              Apakah tiap divisi dapat berkolaborasi dalam menjalankan program kerja atau hanya berdiri
                              sendiri?
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                   stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                   :class="isExpanded ? 'rotate-180' : ''">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                         </button>
                         <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                              aria-labelledby="controlsAccordionItemOne" x-collapse>
                              <div class="pb-4 text-sm sm:text-base text-justify">
                                   Yup, bisa! Program kerja yang dijalankan oleh masing-masing divisi tentu membutuhkan
                                   bantuan dari divisi yang lain. Oleh karena itu, anggota divisi lain pun dapat menjadi
                                   anggota dalam program kerja dari divisi yang berbeda.
                              </div>
                         </div>
                    </div>
               </div>
          </section>

<?= $this->include('layouts/footer') ?>