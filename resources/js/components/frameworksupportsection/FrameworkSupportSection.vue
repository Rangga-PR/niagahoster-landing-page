<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col title">
        <h1>Mendukung Penuh Framework Laravel</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 align-self-end">
        <h4>
          Tak perlu menggunakan dedicated server ataupun VPS yang
          mahal. Layanan PHP hosting murah kami mendukung penuh
          framework favorite anda
        </h4>
        <CustomList withIcon :items="items" />
        <CustomList class="note-item" :items="note" />
        <CustomButton class="section-button" primary text="Pilih Hosting Anda" />
      </div>
      <div class="col-md-6 align-self-end">
        <img
          class="img-section"
          src="/svg/illustration banner support laravel hosting.svg"
          alt="php hosting illustration"
        />
      </div>
    </div>
  </div>
</template>

<script>
import CustomList from "../customlist/CustomList";
import CustomButton from "../custombuton/CustomButton";
export default {
  name: "FrameworkSupportSection",
  components: {
    CustomList,
    CustomButton
  },
  data() {
    return {
      items: [
        "install Laravel <strong>1 klik</strong> dengan Softaculous Installer",
        "Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json</strong> dan <strong>fileinfo.</strong>",
        "Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstall packages pilihan anda"
      ],
      note: [
        "Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis"
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
.img-section {
  max-width: 100%;
  height: auto;
}

.title {
  margin: 2% 0;

  h1 {
    text-align: center;
  }
}

h4 {
  margin: 0 0 1em 0;
  line-height: 1.5em;
}

.note-item {
  margin: 2% 0;
  font-size: 0.9em;
}

.section-button {
  margin: 1% 0 8% 0;
}
</style>
