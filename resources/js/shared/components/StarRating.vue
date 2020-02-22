<template>
    <div class="d-flex">
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="fas fa-star"></i>
    </div>
</template>

<script>
    export default {
        props: {
            rating: Number
        },
        computed: {
            halfStar() {
                return false;
            },
            fullStars() {
                return 4;
            },
            emptyStars() {
                return 1;
            }
        },
    };
</script>
