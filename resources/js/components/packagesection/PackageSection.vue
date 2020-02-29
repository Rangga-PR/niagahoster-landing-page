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
export default {
  name: "PackageSection",
  components: {
    PackageCard
  },
  data() {
    return {
      packages: [
        {
          bestseller: false,
          package_name: "Bayi",
          price: "Rp 19.900",
          discounted_price: "Rp 14.900",
          registered_users: "938",
          features: [
            "<b>0.5X RESOURCE POWER</b>",
            "<b>500 MB</b> Disk Space",
            "<b>Unlimited</b> Bandwidth",
            "<b>Unlimited</b> Databases",
            "<b>1</b> Domain",
            "<b>Instant</b> Backup",
            "<b>Unlimited SSL</b> Gratis Selamanya"
          ]
        },
        {
          bestseller: false,
          package_name: "Pelajar",
          price: "Rp 46.900",
          discounted_price: "Rp 23.450",
          registered_users: "4.168",
          features: [
            "<b>1X RESOURCE POWER</b>",
            "<b>Unlimited</b> Disk Space",
            "<b>Unlimited</b> Bandwidth",
            "<b>Unlimited</b> POP3 Email",
            "<b>Unlimited</b> Databases",
            "<b>10</b> Addon Domains",
            "<b>Instant</b> Backup",
            "<b>Domain Gratis</b> Selamanya",
            "<b>Unlimited SSL</b> Gratis Selamanya"
          ]
        },
        {
          bestseller: true,
          package_name: "Personal",
          price: "Rp 58.900",
          discounted_price: "Rp 38.900",
          registered_users: "10.017",
          features: [
            "<b>2X RESOURCE POWER</b>",
            "<b>Unlimited</b> Disk Space",
            "<b>Unlimited</b> Bandwidth",
            "<b>Unlimited</b> POP3 Email",
            "<b>Unlimited</b> Databases",
            "<b>Unlimited</b> Addon Domains",
            "<b>Instant</b> Backup",
            "<b>Domain Gratis</b> Selamanya",
            "<b>Unlimited SSL</b> Gratis Selamanya",
            "<b>Private</b> Name Server",
            "<b>SpamAssasin</b> Mail Protection"
          ]
        },
        {
          bestseller: false,
          discount: "40%",
          package_name: "Bisnis",
          price: "Rp 109.900",
          discounted_price: "Rp 65.900",
          registered_users: "3.552",
          features: [
            "<b>3X RESOURCE POWER</b>",
            "<b>Unlimited</b> Disk Space",
            "<b>Unlimited</b> Bandwidth",
            "<b>Unlimited</b> POP3 Email",
            "<b>Unlimited</b> Databases",
            "<b>Unlimited</b> Addon Domains",
            "<b>Magic Auto</b> Backup Restore",
            "<b>Domain Gratis</b> Selamanya",
            "<b>Unlimited SSL</b> Gratis Selamanya",
            "<b>Private</b> Name Server",
            "<b>Prioritas</b> Layanan Support",
            "*****",
            "<b>SpamExpert</b> Pro Mail Protection"
          ]
        }
      ]
    };
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