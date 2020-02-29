<template>
  <div class="container">
    <div class="row">
      <div class="col-md-6 ribbon-box">
        <div class="ribbon">
          <i class="fas fa-tag"></i>
        </div>
        <p class="advert">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]</p>
      </div>
      <div class="col-md-6 justify-content-end contact">
        <p class="contact">
          <span>
            <i class="fas fa-phone-alt"></i>
          </span>0274-5305505
        </p>
        <p class="contact">
          <span>
            <i class="fas fa-comment-alt"></i>
          </span>Live Chat
        </p>
        <p class="contact">
          <span>
            <i class="fas fa-user-circle"></i>
          </span>Member Area
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
          <a class="navbar-brand" href="#">
            <img src="/images/niagahoster-logo.png" alt="niagahoster logo" width="250" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link menu" href="#">Hosting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Domain</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Server</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Website</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Afiliasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Promo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Pembayaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Blog</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HeaderSection"
};
</script>

<style lang="scss" scoped>
.contact {
  display: flex;
}

.desktop-nav {
  padding-left: 0;
  padding-right: 0;
  background-color: $white;
}

@media screen and (max-width: 1140px) {
  .navbar-brand img {
    width: 130px;
  }
}

.menu {
  color: #4c4c4c !important;
}

.advert {
  font-size: 0.8em;
}

.contact {
  align-self: center;
  span {
    margin: 0 5px 0 20px;
  }

  p {
    margin: 0;
  }
}

.ribbon {
  position: relative;
  font-family: arial;
  font-size: 1.1em;
  background: $light-blue;
  color: #fff;
  padding: 10px 10px 19px 10px;
  max-width: fit-content;
  top: -7px;

  i {
    color: $white;
  }
}

.ribbon-box {
  display: flex;
  align-items: center;

  p {
    margin-left: 10px;
  }
}

.ribbon-box:after {
  content: "";
  border: 20px solid transparent;
  border-bottom-color: $white;
  border-top: 0;
  position: absolute;
  top: 24px;
  left: 16px;
  margin-left: -2px;
}
</style>