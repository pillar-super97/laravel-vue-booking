<template>
    <div class="card">
        <div class="card-body">
            <div>
                <div class="alert alert-success" v-show="success">Booking created successfully.</div>
                <form ref="formbooking" @submit.prevent="saveBooking">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Your Name" v-model="form.name" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control" name="date" v-model="form.date" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input id="time" type="time" class="form-control" name="time" v-model="form.time" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <textarea id="message" rows="5" class="form-control" name="message" placeholder="Your Message" v-model="form.message" required></textarea>
                       </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Place Booking
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: '',
                date: '',
                time: '',
                message: ''
            },
            success: false
        }
    },
    methods: {
        saveBooking() {
            let success = false;
            axios.post('api/store', {
                booking: this.form
            })
            .then( response => {
                if( response.status == 201 ) {
                    this.$refs['formbooking'].reset();
                    this.$emit('needreload');
                    //this.success = true;
                }
            })
            .catch( error => {
                console.log( error );
            })
        }
    }
}
</script>
