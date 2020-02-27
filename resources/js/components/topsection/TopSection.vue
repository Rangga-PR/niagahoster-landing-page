<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-end">
                <h2>PHP Hosting</h2>
                <h4>
                    Cepat, handal, penuh dengan modul PHP yang anda butuhkan
                </h4>
                <CustomList withIcon :items="data" />
            </div>
            <div class="col-md-6">
                <img
                    class="img-section"
                    src="/svg/illustration banner PHP hosting-01.svg"
                    alt="php hosting illustration"
                />
            </div>
        </div>
    </div>
</template>

<script>
import CustomList from "../customlist/CustomList";
export default {
    name: "TopSection",
    components: {
        CustomList
    },
    data() {
        return {
            data: [
                "untuk performa query yang lebih cepat",
                "memori yang lebih rendah",
                "PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7",
                "enkripsi IonCube dan Zend Guard Loaders"
            ]
        };
    }
};
</script>

<style lang="scss" scoped>
.img-section {
    max-width: 100%;
    height: auto;
}

h2 {
    margin-bottom: 3%;
    font-weight: 800;
}

h4 {
    font-weight: 500;
    margin-bottom: 5%;
}
</style>
