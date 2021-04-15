<template>
    <div class="modal" tabindex="-1" role="dialog" v-show="$store.displayModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content" v-if="$store.selectedDisplay !== null">
                <div class="modal-header">
                    <h5 class="modal-title"># {{ $store.selectedDisplay.id }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="closeModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>ID:</b> {{ $store.selectedDisplay.id }}</p>
                    <p><b>Type:</b> {{ $store.selectedDisplay.type }}</p>
                    <p><b>S/N:</b> {{ $store.selectedDisplay.serial_number }}</p>
                    <p><b>Attachment:</b> <img :src="$store.selectedDisplay.file_path" width="200px"></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal",
    data () {
        return {
            displayModal: false
        }
    },
    methods: {
        closeModal () {
            this.$actions.setSelectedDisplay(null)
            this.$actions.setDisplayModal(false)
        }
    },
    computed: {
    }
}
</script>

<style scoped>

</style>
