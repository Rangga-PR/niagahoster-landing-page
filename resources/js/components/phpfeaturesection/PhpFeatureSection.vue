<template>
  <div class="container-fluid">
    <div class="feature-row row justify-content-center">
      <div class="col">
        <h1>Powerful dengan Limit PHP yang Lebih Besar</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <table>
          <tr>
            <td align="center">
              <i class="fas fa-check-circle"></i>
            </td>
            <td align="center">max execution time 300s</td>
          </tr>
          <tr>
            <td align="center">
              <i class="fas fa-check-circle"></i>
            </td>
            <td align="center">max execution time 300s</td>
          </tr>
          <tr>
            <td align="center">
              <i class="fas fa-check-circle"></i>
            </td>
            <td align="center">php memory limit 1024 MB</td>
          </tr>
        </table>
      </div>
      <div class="col-md-6">
        <table>
          <tr>
            <td align="center">
              <i class="fas fa-check-circle"></i>
            </td>
            <td align="center">post max size 128 MB</td>
          </tr>
          <tr>
            <td align="center">
              <i class="fas fa-check-circle"></i>
            </td>
            <td align="center">upload max filesize 128 MB</td>
          </tr>
          <tr>
            <td align="center">
              <i class="fas fa-check-circle"></i>
            </td>
            <td align="center">max input vars 2500</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PhpFeatureSection"
};
</script>

<style lang="scss" scoped>
h1 {
  margin: 3% 0;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #f7f7f7;
}
table {
  width: 100%;
  padding: 0;
}
tr {
  width: 100%;
  border: 1px solid #f1f1f1;
}
td {
  padding: 0.7em;
}

i {
  color: $green;
}
</style>
