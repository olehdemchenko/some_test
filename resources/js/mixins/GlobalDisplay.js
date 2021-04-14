let globalData = new Vue({
    data: { $display: null }
});

Vue.mixin({
    computed: {
        $display: {
            get: function () { return globalData.$data.$display },
            set: function (newDisplay) { globalData.$data.$display = newDisplay; }
        }
    }
})
