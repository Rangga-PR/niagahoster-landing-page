<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col title">
        <h1>Semua Paket Hosting Sudah Termasuk</h1>
      </div>
    </div>
    <div class="row">
      <div class="col included-features">
        <FeatureCard
          v-for="(feature,index) in includedFeatures"
          :data="feature"
          :key="`card-key-${index}`"
          class="feature-card"
        />
      </div>
    </div>
  </div>
</template>

<script>
import FeatureCard from "../featurecard/FeatureCard";
export default {
  name: "IncludedSection",
  components: {
    FeatureCard
  },
  data() {
    return {
      includedFeatures: [
        {
          title: "PHP Semua Versi",
          desc: "Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!",
          image_url: "/svg/icon PHP Hosting_PHP Semua Versi.svg"
        },
        {
          title: "MySQL Versi 5.6",
          desc: "Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.",
          image_url: "/svg/icon PHP Hosting_My SQL.svg"
        },
        {
          title: "Panel Hosting cPanel",
          desc:
            "Kelola website dengan panel canggih yang familiar di hati Anda.",
          image_url: "/svg/icon PHP Hosting_CPanel.svg"
        },
        {
          title: "Garansi Uptime 99.9%",
          desc: "Data center yang mendukung kelangsungan website Anda 24/7",
          image_url: "/svg/icon PHP Hosting_garansi uptime.svg"
        },
        {
          title: "Database InnoDB Unlimited",
          desc: "Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda",
          image_url: "/svg/icon PHP Hosting_InnoDB.svg"
        },
        {
          title: "Wildcard Remote MySQL",
          desc: "Mendukung s/d 25 max_user_connections dan 100 max_connections",
          image_url: "/svg/icon PHP Hosting_My SQL remote.svg"
        }
      ]
    };
  }
};
</script>

<style lang='scss' scoped>
.title {
  margin: 2% 0;
}

.feature-card {
  border: none;
}

h1 {
  text-align: center;
}

.included-features {
  display: flex;
  flex-wrap: wrap;
}
</style>