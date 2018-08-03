<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div v-for="item in items" class="card-body">
                        {{ item }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['initialItems'],

        data() {
            return {
                items: this.initialItems
            }
        }
        // Can get rid of the created now.
        // created() {
        //     axios.get('/ajax')
        //         .then(response => {
        //             this.items = response.data;
        //             console.log(this.items);
        //         }).catch(errors => {
        //             alert('Error Processing Request!');
        //         });
        // }
    }
</script>
