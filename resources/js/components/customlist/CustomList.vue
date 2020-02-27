<template>
    <ul class="list-container">
        <li v-for="(item, index) in items" :key="'item-key-' + index">
            <span :class="[!withIcon ? 'no-icon' : '']"
                ><i class="fas fa-check-circle"></i
            ></span>
            <p class="item" v-html="item"></p>
        </li>
    </ul>
</template>

<script>
export default {
    name: "CustomList",
    props: {
        items: Array,
        withIcon: Boolean
    }
};
</script>

<style lang="scss" scoped>
li {
    font-family: $roboto;
    list-style-type: none;
    margin: 1em 0 0 0;
    display: flex;
}

.item {
    margin: 0;
}

.list-container {
    padding: 0;
    margin-bottom: 0;
}

span i {
    color: $green;
    font-size: 1.2em;
    margin-right: 0.5em;
}

.no-icon {
    display: none;
}
</style>
