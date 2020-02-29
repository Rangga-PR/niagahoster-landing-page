<template>
  <div class="container-fluid footer-section footer-body">
    <div class="row nav-section">
      <div class="col menu">
        <FooterMenu
          class="footer-menu-card"
          v-for="(menu,index) in menus"
          :key="`footer-menu-${index}`"
          :menu="menu"
        />
      </div>
    </div>
    <div class="col-12 payment-method">
      <div class="col-12 payment">
        <h5>PEMBAYARAN</h5>
      </div>
      <img src="/images/bca.png" alt="bca logo" />
      <img src="/images/mandiri.png" alt="mandiri logo" />
      <img src="/images/bni.png" alt="bni logo" />
      <img src="/images/visa.png" alt="visa logo" />
      <img src="/images/mastercard.png" alt="master card logo" />
      <img src="/images/atm.png" alt="atm bersama logo" />
      <img src="/images/permata.png" alt="permata logo" />
      <img src="/images/prima.png" alt="prima logo" />
      <img src="/images/alto.png" alt="alto logo" />
    </div>
    <div class="row payment-section">
      <div class="col-12">
        <p>Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
      </div>
    </div>
    <div class="row copyright">
      <div class="col-md-9">
        <p>{{`Copyright &copy;${year} Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja, dan DC Biznet Technovillage Jakarta`}}</p>
        <p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
      </div>
      <div class="col-md-3 term-and-condition">
        <a href="#">Syarat dan Ketentuan | Kebijakan Privasi</a>
      </div>
    </div>
  </div>
</template>

<script>
import FooterMenu from "../footermenu/FooterMenu";
export default {
  name: "FooterSection",
  components: {
    FooterMenu
  },
  data() {
    return {
      year: 0,
      menus: [
        {
          title: "hubungi kami",
          top_content: ["0274-5305505", "Senin - Minggu", "24 Jam Nonstop"],
          bottom_content: [
            "Jl. Selokan Mataram Monjali Karangjati MT I/304 Sinduadi, Mlati, Sleman Yogyakarta 55284"
          ]
        },
        {
          title: "layanan",
          menucontent: [
            {
              name: "Domain",
              url: "#"
            },
            {
              name: "Shared Hosting",
              url: "#"
            },
            {
              name: "Cloud VPS Hosting",
              url: "#"
            },
            {
              name: "Managed VPS Hosting",
              url: "#"
            },
            {
              name: "Web Builder",
              url: "#"
            },
            {
              name: "Keamanan SSL/HTTPS",
              url: "#"
            },
            {
              name: "Jasa Pembuatan Website",
              url: "#"
            },
            {
              name: "Program Afiliasi",
              url: "#"
            }
          ]
        },
        {
          title: "service hosting",
          menucontent: [
            {
              name: "Hosting Murah",
              url: "#"
            },
            {
              name: "Hosting Indonesia",
              url: "#"
            },
            {
              name: "Hosting Singapura SG",
              url: "#"
            },
            {
              name: "Hosting PHP",
              url: "#"
            },
            {
              name: "Hosting Wordpress",
              url: "#"
            },
            {
              name: "Hosting Laravel",
              url: "#"
            }
          ]
        },
        {
          title: "tutorial",
          menucontent: [
            {
              name: "Knowledgebase",
              url: "#"
            },
            {
              name: "Blog",
              url: "#"
            },
            {
              name: "Cara Pembayaran",
              url: "#"
            }
          ]
        },
        {
          title: "tentang kami",
          menucontent: [
            {
              name: "Tim Niagahoster",
              url: "#"
            },
            {
              name: "Karir",
              url: "#"
            },
            {
              name: "Events",
              url: "#"
            },
            {
              name: "Penawaran & Promo Spesial",
              url: "#"
            },
            {
              name: "Kontak Kami",
              url: "#"
            }
          ]
        },
        {
          title: "kenapa pilih niagahoster",
          menucontent: [
            {
              name: "Support Terbaik",
              url: "#"
            },
            {
              name: "Garansi Harga Termurah",
              url: "#"
            },
            {
              name: "Domain Gratis Selamanya",
              url: "#"
            },
            {
              name: "Datacenter Hosting Terbaik",
              url: "#"
            },
            {
              name: "Review Pelanggan",
              url: "#"
            }
          ]
        },
        {
          title: "newsletter"
        },
        {
          title: "",
          social_media: true
        }
      ]
    };
  },
  methods: {
    getCurrentYear() {
      const currentDate = new Date();
      return currentDate.getFullYear();
    }
  },
  created() {
    this.year = this.getCurrentYear();
  }
};
</script>

<style lang="scss" scoped>
.footer-section {
  background-color: #303030;
}

.payment-method {
  margin: 1em 0;
  padding: 0;

  h5 {
    font-family: $montserrat;
    font-weight: bold;
  }

  .payment {
    padding: 0;
  }
}

.payment-section {
  p {
    color: #6e6e6e;
  }
}

.copyright {
  p,
  a {
    color: #b7b7b7;
    font-size: 0.7em;
    margin: 0;
    font-family: $montserrat;
    font-weight: 600;
  }

  a {
    text-decoration: none;
    text-align: center;
  }

  p {
    padding: 0 0 0.3em 0;
  }
}

.copyright {
  border-top: 1px solid #292929;
  padding: 1em 0 2em 0;

  .term-and-condition {
    display: flex;
    justify-content: flex-end;
  }
}

.footer-menu-card {
  border: none;
}

.menu {
  display: flex;
  flex-wrap: wrap;
}

.footer-body {
  padding: 0 7% 5px 7% !important;
}
</style>