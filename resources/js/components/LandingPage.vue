<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <TopSection />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <TechSection />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <FrameworkSupportSection />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <BottomSection />
            </div>
        </div>
    </div>
</template>

<script>
import BottomSection from "./bottomsection/BottomSection";
import TopSection from "./topsection/TopSection";
import TechSection from "./techsection/TechSection";
import FrameworkSupportSection from "./frameworksupportsection/FrameworkSupportSection";
export default {
    components: {
        TopSection,
        TechSection,
        BottomSection,
        FrameworkSupportSection
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>

<style lang="scss" scoped>
// @import "../../sass/app.scss";
</style>
