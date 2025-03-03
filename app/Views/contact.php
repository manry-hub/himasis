<?= $this->include('layouts/header') ?>

<section class="flex flex-col max-w-[1536px] mx-auto px-6 md:px-10 lg:px-20 gap-4 md:gap-8 mt-20 md:mt-28"
               data-aos="fade-up">
               <div class="text-center" data-aos="fade-up">
                    <p class="font-semibold">Kontak Hubung</p>
                    <h2 class="inline-block max-w-2xl font-bold text-xl md:text-3xl text-[#0077CC]">
                         Hubungi Kami Melalui Platform Berikut
                    </h2>
               </div>
               <div class="w-full bg-[#0077CC] rounded-lg p-6 md:p-12 mt-2 lg:mt-12" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="grid grid-cols-2 gap-2 lg:flex lg:justify-evenly lg:flex-row font-[500]">
                         <div>
                              <figure
                                   class="flex flex-col lg:flex-row items-center gap-4 bg-white px-8 py-3 rounded-lg shad">
                                   <img src="https://himaif-udayana.com/images/ig-logo.png" alt="logo-instagram"
                                        width="42px">
                                   <figcaption>@himaif_udayana</figcaption>
                              </figure>
                         </div>
                         <div>
                              <figure
                                   class="flex flex-col lg:flex-row items-center gap-4 bg-white px-8 py-3 rounded-lg shad">
                                   <img src="https://himaif-udayana.com/images/line-logo.png" alt="logo-instagram"
                                        width="42px">
                                   <figcaption> <a href="https://wa.me/6285183037405">+62 851 8303 7405</a></figcaption>
                              </figure>
                         </div>
                         <div>
                              <figure
                                   class="flex flex-col lg:flex-row items-center gap-4 bg-white px-8 py-3 rounded-lg shad">
                                   <img src="https://himaif-udayana.com/images/linkedin-logo.png" alt="logo-instagram"
                                        width="42px">
                                   <figcaption>HIMAIF UDAYANA</figcaption>
                              </figure>
                         </div>
                         <div>
                              <figure
                                   class="flex flex-col lg:flex-row items-center gap-4 bg-white px-8 py-3 rounded-lg shad">
                                   <img src="https://himaif-udayana.com/images/yt-logo.png" alt="logo-instagram"
                                        width="42px">
                                   <figcaption>HIMAIF UDAYANA</figcaption>
                              </figure>
                         </div>
                    </div>
               </div>


          </section>
          <section class="mx-auto flex flex-col items-center max-w-[1536px] px-6 md:px-10 lg:px-20 mt-12"
               data-aos="fade-up" data-aos-delay="400">
               <div class="text-center" data-aos="fade-up">
                    <p class="font-semibold">Masih Memiliki Pertanyaan?</p>
                    <h2 class="inline-block max-w-2xl font-bold text-xl md:text-3xl text-[#0077CC]">
                         Kirimi Kami Pertanyaan Yang Ingin Anda Tanyakan
                    </h2>
               </div>
               <div class="w-full mt-8" data-aos="fade-up">
                    <form action="#" method="">
                         <input type="hidden" name="_token" value="v9bGTPsMRXUAB71KWgHATk82TGMAyXpD9WswTCVA"
                              autocomplete="off">
                         <div class="grid grid-cols-2 gap-4 mb-2">
                              <div class="flex flex-col">
                                   <label for="nama">Nama</label>
                                   <input type="text" name="name" id="nama" placeholder="Masukkan nama..."
                                        class="px-4 py-2 border border-[#0077CC] rounded-lg">
                              </div>
                              <div class="flex flex-col">
                                   <label for="email">Email</label>
                                   <input type="email" name="name" id="email" placeholder="Masukkan email..."
                                        class="px-4 py-2 border border-[#0077CC] rounded-lg">
                              </div>
                         </div>
                         <div>
                              <label for="pertanyaan">Pertanyaan</label>
                              <textarea name="question" id="pertanyaan"
                                   class="w-full px-4 py-2 border border-[#0077CC] h-48 resize-none rounded-lg"></textarea>
                         </div>
                         <button type="submit" class="px-4 py-2 rounded-lg bg-[#0077CC] text-white">
                              Kirim Pertanyaan
                         </button>
                    </form>
               </div>
          </section>

<?= $this->include('layouts/footer') ?>