<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            <tr v-for="item in items">
                <th scope="row">{{ item.id }}</th>
                <td>{{ item.type }}</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href="#" class="btn btn-danger" @click="deleteDisplay(item)">Delete</a>
                    <a href="#" class="btn btn-primary" @click="showDisplay(item)">Show</a>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: [
            'displays'
        ],
        data () {
            return {
                items: this.displays
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            deleteDisplay (item) {
                axios.delete(process.env.MIX_APP_URL + `/displays/${item.id}`)
                .then(function (response){
                    location.reload()
                })
            },
            showDisplay (item) {
                this.$actions.setSelectedDisplay(item)
                this.$actions.setDisplayModal(true)
                console.log(this.$store.selectedDisplay)
            }
        }
    }
</script>
