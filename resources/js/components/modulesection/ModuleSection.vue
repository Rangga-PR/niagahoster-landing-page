<template>
  <div class="container-fluid modulesection-body">
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
import axios from "axios";
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
    },
    getModuleData() {
      axios.get("/api/data/php-module").then(response => {
        this.modules = response.data;
      });
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
      modules: []
    };
  },
  created() {
    this.getModuleData();
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

.modulesection-body {
  padding: 0 7% 5px 7% !important;
}
</style>