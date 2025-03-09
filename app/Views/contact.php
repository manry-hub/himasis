<?= $this->include('layouts/header') ?>

<section class="flex flex-col max-w-[1536px] mx-auto px-6 md:px-10 lg:px-20 gap-4 md:gap-8 mt-20 md:mt-28"
               data-aos="fade-up">
               <div class="text-center" data-aos="fade-up">
                    <p class="font-semibold">Kontak Hubung</p>
                    <h2 class="inline-block max-w-2xl font-bold text-xl md:text-3xl text-[#0077CC]">
                         Hubungi Kami Melalui Platform Berikut
                    </h2>
               </div>
               <div class="w-full bg-[#0077CC] rounded-lg p-6 md:p-12 mt-2 lg:mt-5" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="grid grid-cols-2 gap-2 lg:flex lg:justify-evenly lg:flex-row font-[500]">
                         <div>
                              <figure
                                   class="flex flex-col lg:flex-row items-center gap-4 bg-white px-8 py-3 rounded-lg shad">
                                   <img src="https://himaif-udayana.com/images/line-logo.png" alt="logo-instagram"
                                        width="42px">
                                   <figcaption> <a href="https://wa.me/6285894653782">+62 858-9465-3782 (kak luthfi)</a></figcaption>
                              </figure>
                         </div>
                         <div>
                              <figure
                                   class="flex flex-col lg:flex-row items-center gap-4 bg-white px-8 py-3 rounded-lg shad">
                                   <img src="https://himaif-udayana.com/images/line-logo.png" alt="logo-instagram"
                                        width="42px">
                                   <figcaption> <a href="https://wa.me/6281399551192">+62 813-9955-1192 (kak dyla)</a></figcaption>
                              </figure>
                         </div>
                         
                         
                    </div>
               </div>


          </section>
          <section class="mx-auto flex flex-col items-center max-w-[1536px] px-6 md:px-10 lg:px-20 mt-12"
    data-aos="fade-up" data-aos-delay="400">
    <div class="text-center" data-aos="fade-up">
        <p class="font-semibold">Let’s talk</p>
        <h2 class="inline-block max-w-2xl font-bold text-xl md:text-3xl text-[#0077CC]">
            Send Us Your Feedback
        </h2>
    </div>
    <div class="w-full mt-8 flex flex-col lg:flex-row gap-6 items-center lg:items-start" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7037000176147!2d106.86527847429643!3d-6.170414593816896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5043973ff63%3A0xc125c1242e567fd1!2sPoliteknik%20STMI%20Jakarta!5e0!3m2!1sid!2sid!4v1741441087421!5m2!1sid!2sid" 
            class="w-full lg:w-[400px] h-[300px] md:h-[400px] lg:h-[600px] border-0 rounded-lg" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="#" method="POST" class="w-full max-w-[836px] bg-white p-6 rounded-lg shadow-lg">
            <input type="hidden" name="_token" value="v9bGTPsMRXUAB71KWgHATk82TGMAyXpD9WswTCVA" autocomplete="off">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div class="flex flex-col">
                    <label for="nama" class="font-medium">Nama</label>
                    <input type="text" name="name" id="nama" placeholder="Masukkan nama..."
                        class="px-4 py-2 border border-[#0077CC] rounded-lg focus:ring-2 focus:ring-[#0077CC]">
                </div>
                <div class="flex flex-col">
                    <label for="email" class="font-medium">Email</label>
                    <input type="email" name="email" id="email" placeholder="Masukkan email..."
                        class="px-4 py-2 border border-[#0077CC] rounded-lg focus:ring-2 focus:ring-[#0077CC]">
                </div>
            </div>
            <div class="mb-4">
                <label for="pertanyaan" class="font-medium">Pertanyaan</label>
                <textarea name="question" id="pertanyaan"
                    class="w-full px-4 py-2 border border-[#0077CC] h-48 resize-none rounded-lg focus:ring-2 focus:ring-[#0077CC]"></textarea>
            </div>
            <button type="submit" class="w-full md:w-auto px-6 py-3 rounded-lg bg-[#0077CC] text-white font-medium shadow-md hover:bg-[#005fa3] transition-all">
                Kirim Pertanyaan
            </button>
        </form>
    </div>
</section>

<?= $this->include('layouts/footer') ?>