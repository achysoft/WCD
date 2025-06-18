
<!-- Carousel -->
<div
  x-data="{
    activeSlide: 0,
    slides: 3,
    interval: null,
    init() {
      this.interval = setInterval(() => {
        this.nextSlide();
      }, 5000);
    },
    nextSlide() {
      this.activeSlide = (this.activeSlide + 1) % this.slides;
    },
    prevSlide() {
      this.activeSlide = (this.activeSlide - 1 + this.slides) % this.slides;
    },
    getImage(i) {
      return [
        '<?= base_url('assets/images/carousel/b1.jpg') ?>',
        '<?= base_url('assets/images/carousel/b2.jpg') ?>',
        '<?= base_url('assets/images/carousel/b3.jpg') ?>',
      ][i];
    },
    getCaption(i) {
      return [
        'UI and UX Design play key roles in user experience.',
        'Design impacts how users interact with products.',
        'Consistency leads to better usability and satisfaction.'
      ][i];
    }
  }"
  x-init="init()"
  class="relative w-full overflow-hidden"
>

  <!-- Slide wrapper -->
  <div class="flex transition-transform duration-700 ease-in-out"
       :style="'transform: translateX(-' + (activeSlide * 100) + '%)'"
       style="width: 300%">
    <template x-for="i in slides" :key="i">
      <div class="w-full flex-shrink-0 h-[500px] bg-center bg-cover relative"
           :style="'background-image: url(' + getImage(i - 1) + ');'">
        <div class="absolute bottom-0 bg-black/50 text-white p-6 w-full">
          <h2 class="text-xl font-semibold" x-text="'Slide ' + i"></h2>
          <p x-text="getCaption(i - 1)"></p>
        </div>
      </div>
    </template>
  </div>

  <!-- Indicators -->
  <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-10">
    <template x-for="i in slides" :key="i">
      <button
        class="w-3 h-3 rounded-full"
        :class="activeSlide === i - 1 ? 'bg-white' : 'bg-gray-400'"
        @click="activeSlide = i - 1"
      ></button>
    </template>
  </div>

  <!-- Controls -->
  <button
    @click="prevSlide()"
    class="absolute top-1/2 left-4 -translate-y-1/2 bg-black/40 text-white p-2 rounded-full hover:bg-black/60 z-10"
  >
    &#10094;
  </button>
  <button
    @click="nextSlide()"
    class="absolute top-1/2 right-4 -translate-y-1/2 bg-black/40 text-white p-2 rounded-full hover:bg-black/60 z-10"
  >
    &#10095;
  </button>
</div>
