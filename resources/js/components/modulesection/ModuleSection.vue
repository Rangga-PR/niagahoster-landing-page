<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col title">
        <h2>Modul Lengkap untuk Menjalankan Aplikasi PHP anda.</h2>
      </div>
    </div>
    <div class="row">
      <div class="col collapse" id="module-list" aria-expanded="false">
        <CustomList :column="column" :items="modules" />
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-2 btn-section">
        <a
          href="#module-list"
          role="button"
          data-toggle="collapse"
          aria-expanded="false"
          aria-controls="module-list"
        >
          <CustomButton text="Selengkapnya" />
        </a>
      </div>
    </div>
  </div>
</template>

<script>
import CustomButton from "../custombuton/CustomButton";
import CustomList from "../customlist/CustomList";
export default {
  name: "ModuleSection",
  components: {
    CustomButton,
    CustomList
  },
  methods: {
    changeColumn() {
      if (window.innerWidth <= 576) {
        this.column = 1;
      } else {
        this.column = 4;
      }
    },
    onWindowSizeChange(event) {
      this.changeColumn();
    }
  },
  mounted() {
    window.addEventListener("resize", this.onWindowSizeChange);
    this.changeColumn();
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.onWindowSizeChange);
  },
  data() {
    return {
      column: 1,
      modules: [
        "IcePhp",
        "apc",
        "apcu",
        "apm",
        "ares",
        "bcmath",
        "bcompiler",
        "big_int",
        "bigset",
        "bloomy",
        "bz2_filter",
        "clamav",
        "coin_acceptor",
        "crack",
        "dba",
        "http",
        "huffman",
        "idn",
        "igbinary",
        "imagick",
        "imap",
        "inclued",
        "inotify",
        "interbase",
        "intl",
        "ioncube_loader",
        "ioncube_loader_4",
        "jsmin",
        "json",
        "Idap",
        "nd_pdo_mysql",
        "oauth",
        "oci8",
        "odbc",
        "opcache",
        "pdf",
        "pdo",
        "pdo_dblib",
        "pdo_firebird",
        "pdo_mysql",
        "pdo_odbc",
        "pdo_pgsql",
        "pdo_sqlite",
        "pgsql",
        "phalcon",
        "stats",
        "stem",
        "stomp",
        "suhousin",
        "sybase_ct",
        "sysvmsg",
        "sysvsem",
        "sysvshm",
        "tidy",
        "timezonedb",
        "trader",
        "translit",
        "uploadprogress",
        "uri_template",
        "uuid"
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
h2 {
  font-weight: 500;
  text-align: center;
}

.title {
  margin: 3% 0;
}

.btn-section {
  margin: 3% 0;
}

div.collapse:not(.show) {
  display: block;
  height: 30vh;
  overflow: hidden;
}

div.collapsing {
  height: 30vh;
  transition: ease-in 0.5s;
}
</style>