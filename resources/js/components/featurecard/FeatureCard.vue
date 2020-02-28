<template>
  <div class="card">
    <img class="card-img-top" :src="data.image_url" :alt="`${data.title}-image`" />
    <div class="card-body">
      <h5 class="card-title">
        <strong>{{data.title}}</strong>
      </h5>
      <p class="card-text">{{data.desc}}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "FeatureCard",
  props: {
    data: Object
  }
};
</script>

<style lang="scss" scoped>
.card {
  width: 33.33%;
  height: 50%;
  border: none;
  margin: 0.2em 0;

  img {
    width: 20%;
    align-self: center;
  }
}

@media screen and (max-width: 768px) {
  .card {
    width: 100%;
    height: fit-content;
  }
}

.card-body {
  h5,
  p {
    text-align: center;
  }

  p {
    font-size: 0.9em;
  }
}
</style>