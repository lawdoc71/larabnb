<template>
    <div>
        <bookable-list-item
            v-if="bookable1"
            :item-title="bookable1.title"
            :item-content="bookable1.content"
            :price="1000"
        ></bookable-list-item>
        <bookable-list-item
            v-if="bookable2"
            :item-title="bookable2.title"
            :item-content="bookable2.content"
            :price="1500"
        ></bookable-list-item>
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
            bookables: null
        };
    },
    created() {
       console.log('created');
       console.log(this.bookable1);
       console.log(this.bookable2);
       setTimeout(() => {
           this.bookables = [{
               title: "Cheap Villa !!",
               content: "A very cheap villa"
           },
           {
               title: "Cheap Villa 2!!",
               content: "A very cheap villa 2"
           }];
       }, 2000);
   }
};
</script>
