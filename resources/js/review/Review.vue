<template>
    <div>
        <div class="form-group">
            <label class="text-muted">Select star rating</label>
            <star-rating class="fa-3x" v-model="review.rating"></star-rating>
        </div>
        <div class="form-group">
            <label for="content" class="text-muted">Describe Your Experience</label>
            <textarea name="content" class="form-control" cols="30" rows="10" v-model="review.content"></textarea>
        </div>

        <button class="btn btn-lg btn-primary btn-block">Submit</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                review: {
                    rating: 5,
                    content: null
                },
                existingReview: null
            };
        },
        created() {
            axios
                .get(`/api/reviews/${this.$route.params.id}`)
                .then(response => (this.existingReview = response.data.data))
                .catch(err => {
                    //
                });
        },
        computed: {
            alreadyReviewed() {
                return this.existingReview !== null;
            }
        }
    };
</script>
