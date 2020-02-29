<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col title">
        <h1>Paket Hosting Singapura yang Tepat</h1>
        <h2>Diskon 40% + Domain dan SSL Gratis untuk Anda</h2>
      </div>
    </div>
    <div class="row">
      <div class="col package-list-container">
        <PackageCard v-for="(item, index) in packages" :data="item" :key="index" />
      </div>
    </div>
  </div>
</template>

<script>
import PackageCard from "../packagecard/PackageCard";
import axios from "axios";
export default {
  name: "PackageSection",
  components: {
    PackageCard
  },
  data() {
    return {
      packages: []
    };
  },
  methods: {
    getPackageData() {
      axios.get("/api/data/hosting-package").then(response => {
        this.packages = response.data;
      });
    }
  },
  created() {
    this.getPackageData();
  }
};
</script>

<style lang="scss" scoped>
.title {
  margin: 2% 0;
  h1,
  h2 {
    text-align: center;
  }

  h1 {
    font-weight: bold;
  }
}

.package-list-container {
  display: flex;
  overflow: auto;
  padding: 2%;
}
</style>