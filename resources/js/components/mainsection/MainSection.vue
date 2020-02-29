<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col mainsection-body">
        <TechSection />
        <PackageSection />
        <PhpFeatureSection />
        <IncludedSection />
        <FrameworkSupportSection />
      </div>
    </div>
  </div>
</template>

<script>
import TechSection from "../techsection/TechSection";
import FrameworkSupportSection from "../frameworksupportsection/FrameworkSupportSection";
import PhpFeatureSection from "../phpfeaturesection/PhpFeatureSection";
import IncludedSection from "../includedsection/IncludedSection";
import PackageSection from "../packagesection/PackageSection";
export default {
  name: "MainSection",
  components: {
    TechSection,
    FrameworkSupportSection,
    PhpFeatureSection,
    PackageSection,
    IncludedSection
  }
};
</script>

<style lang="scss" scoped>
.mainsection-body {
  margin-top: 80px;
  padding: 0 7% 5px 7%;
  border-top: 1px solid #f1f1f1;
  border-bottom: 1px solid #f1f1f1;
}
</style>