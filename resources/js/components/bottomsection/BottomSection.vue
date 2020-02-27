<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Linux Hosting yang Stabil dengan Teknologi LVE</h2>
                <p>
                    SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM
                    <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk
                    stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk
                    kecepatan <b>MySQL</b> dan caching, Apache load balancer
                    berbasis LiteSpeed Technologies, <b>CageFS</b> security,
                    <b>Raid-10</b> protection dan auto backup untuk keamanan
                    website PHP anda
                </p>
                <font-awesome-icon :icon="['fas', 'user-secret']" />
                <CustomButton primary text="Pilih Hosting Anda" />
            </div>
            <div class="col-md-6">
                <img
                    class="img-section"
                    src="/images/Image support.png"
                    alt="customer support"
                />
            </div>
        </div>
    </div>
</template>

<script>
import CustomButton from "../custombuton/CustomButton";
export default {
    components: {
        CustomButton
    },
    name: "BottomSection"
};
</script>

<style lang="scss" scoped>
.img-section {
    max-width: 100%;
    height: auto;
}

h2 {
    margin-bottom: 5%;
}

p {
    font-family: $roboto;
}
</style>
