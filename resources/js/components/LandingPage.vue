<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <HeaderSection />
      </div>
    </div>
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
        <PackageSection />
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col">
        <PhpFeatureSection />
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col">
        <IncludedSection />
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col">
        <FrameworkSupportSection />
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col">
        <ModuleSection />
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col">
        <BottomSection />
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col">
        <FooterSection />
      </div>
    </div>
  </div>
</template>

<script>
import BottomSection from "./bottomsection/BottomSection";
import TopSection from "./topsection/TopSection";
import TechSection from "./techsection/TechSection";
import FrameworkSupportSection from "./frameworksupportsection/FrameworkSupportSection";
import PhpFeatureSection from "./phpfeaturesection/PhpFeatureSection";
import ModuleSection from "./modulesection/ModuleSection";
import IncludedSection from "./includedsection/IncludedSection";
import PackageSection from "./packagesection/PackageSection";
import FooterSection from "./footersection/FooterSection";
import HeaderSection from "./headersection/HeaderSection";
export default {
  components: {
    TopSection,
    TechSection,
    BottomSection,
    FrameworkSupportSection,
    PhpFeatureSection,
    ModuleSection,
    IncludedSection,
    PackageSection,
    FooterSection,
    HeaderSection
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>

<style lang="scss" scoped>
// @import "../../sass/app.scss";
</style>
