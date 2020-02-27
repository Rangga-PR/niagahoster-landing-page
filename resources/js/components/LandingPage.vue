<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <BottomSection />
            </div>
        </div>
    </div>
</template>

<script>
import BottomSection from "./bottomsection/BottomSection";
export default {
    components: {
        BottomSection
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>

<style lang="scss" scoped>
// @import "../../sass/app.scss";
</style>
