<template>
    <div>
        <div v-if="loading">
            Data is loading...
        </div>
        <div v-else>
            <div class="row mb-4" v-for="row in rows" :key="'row' + row">
                <div class="col"
                    v-for="(bookable, column) in bookablesInRow(row)"
                    :key="'row' + row + column">
                    <bookable-list-item
                        :item-title="bookable.title"
                        :item-content="bookable.content"
                        :price="1000"
                    ></bookable-list-item>
                </div>
               <div class="col" v-for="p in placeholdersInRow(row)" :key="'placeholder' + row + p"></div>
            </div>
        </div>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem"
export default {
    components: {
        BookableListItem
    },
    data() {
        return {
            bookables: null,
            loading: false,
            columns: 3
        };
    },
    computed: {
        rows() {
            return this.bookables === null // if this is true
            ? 0 // then do this
            : Math.ceil(this.bookables.length / this.columns) // if not true, do this
        }
    },
    methods: {
        bookablesInRow(row) {
           return this.bookables.slice((row - 1) * this.columns, row * this.columns);
        },
        placeholdersInRow(row) {
            return this.columns - this.bookablesInRow(row).length;
        }
    },
    created() {
        this.loading = true;

        const p = new Promise((resolve, reject) => {
            console.log(resolve);
            console.log(reject);
            setTimeout(() => resolve("Hello"), 3000);
        })
            .then(result => console.log(`Success ${result}`))
            .catch(result => console.log(`Error ${result}`));
        console.log(p);
   }
};
</script>
