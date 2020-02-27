<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <BottomSection />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <TopSection />
            </div>
        </div>
    </div>
</template>

<script>
import BottomSection from "./bottomsection/BottomSection";
import TopSection from "./topsection/TopSection";
export default {
    components: {
        TopSection,
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
