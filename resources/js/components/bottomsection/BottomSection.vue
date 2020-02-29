<template>
  <div>
    <div class="container-fluid bottom-body">
      <div class="row">
        <div class="col-md-6">
          <h2>Linux Hosting yang Stabil dengan Teknologi LVE</h2>
          <p>
            SuperMicro
            <b>Intel Xeon 24-Cores</b> server dengan RAM
            <b>128 GB</b> dan teknologi
            <b>LVE CloudLinux</b> untuk
            stabilitas server Anda. Dilengkapi dengan
            <b>SSD</b> untuk
            kecepatan
            <b>MySQL</b> dan caching, Apache load balancer
            berbasis LiteSpeed Technologies,
            <b>CageFS</b> security,
            <b>Raid-10</b> protection dan auto backup untuk keamanan
            website PHP anda
          </p>
          <CustomButton primary text="Pilih Hosting Anda" />
        </div>
        <div class="col-md-6">
          <img class="img-section" src="/images/Image support.png" alt="customer support" />
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row social-media-section bottom-body">
        <div class="col-md-6 align-self-center">Bagikan jika anda menyukai halaman ini</div>
        <div class="col-md-6 like-count">
          <i class="fab fa-facebook-square"></i>
          <div class="bubble">80k</div>
          <i class="fab fa-twitter-square"></i>
          <div class="bubble">450</div>
          <i class="fab fa-google-plus-square"></i>
          <div class="bubble">1900</div>
        </div>
      </div>
      <div class="row help-section bottom-body">
        <div class="col-md-10">
          <div class="contact-us">
            <h1>
              Perlu
              <strong>Bantuan?</strong> Hubungi Kami:
              <strong>0274-5305505</strong>
            </h1>
          </div>
        </div>
        <div class="col-md-2">
          <div class="live-chat">
            <button class="chat-btn">
              <span>
                <i class="fas fa-comment-alt"></i>
              </span>
              Live Chat
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CustomButton from "../custombuton/CustomButton";
export default {
  components: {
    CustomButton
  },
  name: "BottomSection"
};
</script>

<style lang="scss" scoped>
.img-section {
  max-width: 100%;
  height: auto;
}

h2 {
  margin-bottom: 5%;
}

p,
b {
  font-family: $roboto;
}

.help-section {
  background-color: #00a2f3;
  padding: 4% 0;
  h1,
  strong {
    color: $white;
    margin: 0;
  }

  .contact-us {
    border-right: 1px solid #03b2fb;
  }

  .chat-btn {
    background-color: #00a2f3;
    border: 2px solid $white;
    border-radius: 100px;
    padding: 9px 25px;
    color: $white;
    i {
      color: $white;
      padding-right: 5px;
    }
  }
}

.social-media-section {
  background-color: #f7f7f7;
  padding: 2% 0;
  i {
    font-size: 2.2em;
  }

  .fa-facebook-square {
    color: $facebook;
  }

  .fa-twitter-square {
    color: $twitter;
  }

  .fa-google-plus-square {
    color: $google;
  }
}

.like-count {
  display: flex;
}

.bubble {
  margin: 0 2%;
  position: relative;
  font-family: arial;
  font-size: 0.9em;
  background: #f7f7f7;
  color: #96959d;
  border-radius: 2px;
  padding: 0.5em 1.2em;
  max-width: 400px;
  width: fit-content;
  border: 1px solid #cdcdcd;
}

.bubble:before {
  content: "";
  border: 5px solid transparent;
  border-right-color: #cdcdcd;
  border-left: 0;
  position: absolute;
  left: -5px;
  top: 50%;
  margin-top: -5px;
}

.bubble:after {
  content: "";
  border: 4px solid transparent;
  border-right-color: #f7f7f7;
  border-left: 0;
  position: absolute;
  left: -4px;
  top: 50%;
  margin-top: -4px;
}

.bottom-body {
  padding-left: 7% !important;
  padding-right: 7% !important;
}
</style>
