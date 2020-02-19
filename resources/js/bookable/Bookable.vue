<template>
    <div>
        <h1>Title</h1>
        <p>Content</p>
    </div>
</template>

<script>
export default {
    created() {
        console.log(this.$route.params.id);
    }
}
</script>
