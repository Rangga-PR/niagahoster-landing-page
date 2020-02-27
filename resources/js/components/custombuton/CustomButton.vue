<template>
    <button class="button" :class="[primary ? 'primary' : 'secondary']">
        {{ text }}
    </button>
</template>

<script>
export default {
    name: "CustomButton",
    props: {
        text: String,
        primary: Boolean
    }
};
</script>

<style lang="scss" scoped>
.button {
    padding: 9px 15px;
    border-radius: 100px;
    font-weight: bolder;
}

.primary {
    color: $white;
    background-color: $light-blue;
    border: 2px solid $light-blue;
}

.secondary {
    color: $black;
    background-color: $white;
    border: 2px solid $black;
}
</style>
