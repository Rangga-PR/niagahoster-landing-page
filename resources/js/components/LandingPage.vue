<template>
  <div>
    <HeaderSection />
    <TopSection />
    <MainSection />
    <ModuleSection />
    <BottomSection />
    <FooterSection />
  </div>
</template>

<script>
import BottomSection from "./bottomsection/BottomSection";
import TopSection from "./topsection/TopSection";
import ModuleSection from "./modulesection/ModuleSection";
import FooterSection from "./footersection/FooterSection";
import HeaderSection from "./headersection/HeaderSection";
import MainSection from "./mainsection/MainSection";
export default {
  components: {
    TopSection,
    MainSection,
    BottomSection,
    ModuleSection,
    FooterSection,
    HeaderSection
  }
};
</script>

<style lang="scss" scoped>
.full-body {
  width: 100%;
}

.footer {
  background-color: #303030;
}
</style>
