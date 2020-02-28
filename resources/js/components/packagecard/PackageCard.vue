<template>
  <div v-if="data.bestseller" class="card best-seller">
    <div class="ribbon ribbon-top-left">
      <span>BEST SELLER!</span>
    </div>
    <div class="card-header">
      <h3>{{data.package_name}}</h3>
    </div>
    <div class="price">
      <p>
        <strike>{{data.price}}</strike>
      </p>
      <p class="discount-price">
        {{data.discounted_price.slice(0,3)}}
        <strong
          class="head-number"
        >{{data.discounted_price.slice(3,5)}}</strong>
        <strong class="tail-number">{{data.discounted_price.slice(5)}}</strong>
        <span>/bln</span>
      </p>
    </div>
    <div class="card-subheader">
      <p>
        <strong class="users-count">{{data.registered_users}}</strong> Pengguna Terdaftar
      </p>
    </div>
    <div class="card-body">
      <CustomList class="feature-list" :items="data.features" />
    </div>
    <div class="card-footer">
      <CustomButton primary text="Pilih Sekarang" />
    </div>
  </div>

  <div v-else class="card">
    <div class="card-header">
      <h3>{{data.package_name}}</h3>
    </div>
    <div class="price">
      <p>
        <strike>{{data.price}}</strike>
      </p>
      <p class="discount-price">
        {{data.discounted_price.slice(0,3)}}
        <strong
          class="head-number"
        >{{data.discounted_price.slice(3,5)}}</strong>
        <strong class="tail-number">{{data.discounted_price.slice(5)}}</strong>
        <span>/bln</span>
      </p>
    </div>
    <div class="card-subheader">
      <p>
        <strong class="users-count">{{data.registered_users}}</strong> Pengguna Terdaftar
      </p>
    </div>
    <div class="card-body">
      <CustomList class="feature-list" :items="data.features" />
    </div>
    <div class="card-footer">
      <CustomButton v-if="data.discount" :text="`Diskon ${data.discount}`" />
      <CustomButton v-else text="Pilih Sekarang" />
    </div>
  </div>
</template>

<script>
import CustomList from "../customlist/CustomList";
import CustomButton from "../custombuton/CustomButton";
export default {
  name: "PackageCard",
  components: {
    CustomList,
    CustomButton
  },
  props: {
    data: Object
  }
};
</script>

<style lang="scss" scoped>
.card {
  height: fit-content;
  width: fit-content;

  h3 {
    text-align: center;
    margin: 0;
  }

  p {
    text-align: center;
  }

  .price {
    padding: 1em 1em 0 1em;

    p {
      margin: 0.6em 0;
    }

    .head-number {
      font-size: 3em;
      position: relative;
      top: 0.4em;
    }

    .discount-price {
      top: -1.5em;
      position: relative;
    }
  }

  .feature-list {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .card-footer {
    background-color: $white;
    display: flex;
    justify-content: center;
    border: none;
    margin-bottom: 1em;
  }

  .card-header {
    background-color: $white;
    padding: 1em;

    h3 {
      font-weight: bold;
    }
  }

  .card-subheader {
    border: 1px solid #f1f1f1;
    padding: 0.8em 0;

    p {
      margin: 0.4em 0;
    }

    strong {
      font-weight: 500;
    }
  }

  .card-body ul {
    text-align: center;
  }
}

.best-seller {
  border-color: $light-blue !important;

  .card-header,
  .price {
    background-color: $light-blue;
    border: none;

    h3,
    p,
    strong,
    strike,
    span {
      color: $white;
    }
  }

  .card-subheader {
    background-color: $blue;
    border: none;
    p,
    strong {
      color: white;
    }
  }
}

.ribbon {
  width: 115px;
  height: 115px;
  overflow: hidden;
  position: absolute;
}
.ribbon::before,
.ribbon::after {
  position: absolute;
  content: "";
  display: block;
  border: 5px solid #397d35;
}
.ribbon span {
  position: absolute;
  display: block;
  width: 225px;
  padding: 15px 0;
  background-color: $green;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  color: #fff;
  font: 600 13px $montserrat;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  text-transform: uppercase;
  text-align: center;
}

.ribbon-top-left {
  top: -10px;
  left: -10px;
}
.ribbon-top-left::before,
.ribbon-top-left::after {
  border-top-color: transparent;
  border-left-color: transparent;
}
.ribbon-top-left::before {
  top: 0;
  right: 0;
}
.ribbon-top-left::after {
  bottom: 0;
  left: 0;
}
.ribbon-top-left span {
  right: -40px;
  top: 17px;
  transform: rotate(-45deg);
}

@media screen and (max-width: 1024px) {
  .card {
    min-width: fit-content !important;
  }
}
</style>