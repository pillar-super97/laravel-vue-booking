<template>
    <div class="card">
        <div class="card-body" v-on:needreload="getList()">
            <template v-for="item in bookings" :key="item.id">
                <div class="col-md-6">
                    <div>{{ item.id }}</div>
                    <div>{{ item.name }}</div>
                    <div>{{ item.date }}</div>
                    <div>{{ item.time }}</div>
                    <div>{{ item.message }}</div>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            bookings: []
        }
    },
    methods: {
        getList() {
            axios.get('api/bookings')
                .then( response => {
                    this.bookings = response.data;
                })
                .catch( error => {
                    console.log( error );
                })
        }
    },
    created() {
        this.getList();
    }
}
</script>
