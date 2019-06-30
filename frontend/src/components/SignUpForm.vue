<template>
    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <form v-on:submit.prevent="onSubmit">
                    <div class="form-group">
                        <label for="first_name">First name</label>
                        <input v-model="email" type="text" class="form-control" id="first_name"
                               placeholder="Enter First name">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input v-model="password" type="password" class="form-control" placeholder="Enter you password">
                    </div>
                    <div class="form-group">
                        <label>Repeat password</label>
                        <input v-model="repeat_password" type="password" class="form-control"
                               placeholder="Repeat password">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>
</template>

<script>
    import 'bootstrap/dist/css/bootstrap.css'

    export default {
        name: 'sign-up-form',
        components: {},
        data() {
            return {
                email: null,
                password: null,
                repeat_password: null,
            }
        },
        methods: {
            onSubmit() {
                alert('Data sent');
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
