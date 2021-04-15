<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Reseller</th>
            <th scope="col">S/N</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            <tr v-for="item in items">
                <th scope="row">{{ item.id }}</th>
                <td>{{ item.type }}</td>
                <td>{{ item.reseller.name }}</td>
                <td>{{ item.serial_number }}</td>
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
            }
        }
    }
</script>
