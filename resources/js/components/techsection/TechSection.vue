<template>
    <div class="container">
        <div class="row justify-content-center bottom-row">
            <div class="col-md-3 align-self-center center">
                <img src="/images/zenguard.png" alt="zenguard" />
            </div>
            <div class="col-md-3 center">
                <img src="/images/composer.png" alt="composer" />
            </div>
            <div class="col-md-3 align-self-center center">
                <img src="/images/ioncube.png" alt="ioncube" />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "TechSection"
};
</script>

<style lang="scss" scoped>
.center {
    width: fit-content;
    display: flex;
    justify-content: center;
}

.bottom-row {
    padding: 5% 0;
}
</style>
