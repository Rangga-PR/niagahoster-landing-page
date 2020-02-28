<template>
  <div class="card footer-menu">
    <div class="card-header footer-menu">
      <p class="title">{{menu.title.toUpperCase()}}</p>
    </div>
    <div v-if="menu.menucontent || menu.top_content" class="card-body footer-menu">
      <div class="top-content">
        <ul v-if="menu.menucontent" class="content">
          <li
            class="content"
            v-for="(content,index) in menu.menucontent"
            :key="`menu-content-${index}`"
          >
            <a class="content" :href="content.url">{{content.name}}</a>
          </li>
        </ul>
        <ul v-if="menu.top_content" class="content">
          <li
            class="content"
            v-for="(content,index) in menu.top_content"
            :key="`top-content-${index}`"
          >{{content}}</li>
        </ul>
      </div>
      <div class="bottom-content">
        <ul v-if="menu.bottom_content" class="content">
          <li
            class="content"
            v-for="(content,index) in menu.bottom_content"
            :key="`bottom-content-${index}`"
          >{{content}}</li>
        </ul>
      </div>
    </div>
    <div v-else-if="menu.social_media" class="card-body footer-menu">
      <div class="social-container">
        <a href="#">
          <div class="social-link">
            <i class="fab fa-facebook-f"></i>
          </div>
        </a>
        <a href="#">
          <div class="social-link">
            <i class="fab fa-twitter"></i>
          </div>
        </a>
        <a href="#">
          <div class="social-link">
            <i class="fab fa-google-plus-g"></i>
          </div>
        </a>
      </div>
    </div>
    <div v-else class="card-body footer-menu">
      <div class="top-content">
        <form>
          <input placeholder="Email" />
          <button>Berlangganan</button>
        </form>
      </div>
      <div class="bottom-content">
        <p class="newsletter">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda</p>
      </div>
    </div>
  </div>
</template>

<script>
import CustomList from "../customlist/CustomList";
export default {
  name: "FooterMenu",
  components: {
    CustomList
  },
  props: {
    menu: Object
  }
};
</script>

<style lang="scss" scoped>
.card {
  width: 25%;

  .footer-menu {
    border: none;
    background-color: #303030;
    padding: 0 20px 20px 20px;
  }

  .top-content {
    margin-bottom: 1em;
  }

  .content {
    list-style-type: none;
    color: #d8d8d8;
    margin: 0.4em 0;
    padding: 0;
  }

  .title {
    font-family: $montserrat;
    font-weight: bold;
    font-size: 0.9em;
    color: #8e8e8e;
    margin: 0;
  }
}

.newsletter {
  font-size: 0.7em;
  color: #6e6e6e;
}

form {
  display: flex;
  flex-direction: row;
}

input {
  flex-grow: 2;
  padding: 10px;
  border: none;
  border-radius: 100px;
}

input:focus {
  outline: none;
}

button {
  background-color: #00a2f3;
  color: $white;
  padding: 10px;
  margin: 5px;
  border: none;
  border-radius: 100px;
  position: relative;
  left: -145px;
}

.social-link {
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px solid $grey;
  border-radius: 90px;
  margin-top: 17px;

  i {
    color: $grey;
  }
}

.social-container {
  display: flex;
  justify-content: space-evenly;
  a {
    text-decoration: none;
  }
}

@media screen and (max-width: 768px) {
  .card {
    width: 100%;
  }
}
</style>