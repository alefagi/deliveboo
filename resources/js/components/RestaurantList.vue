<template>
    <div class="restaurants-list">
        <div v-for="user in users" :key="user.id" @click="redirect(user.id)">
            {{user.name}}
        </div>
    </div>
</template>

<script>
    export default {
        name: 'RestaurantList',
        data() {
        return {
            users: [],
            cuisines: [],
        }
        },
        created: function(){
            axios.get('http://127.0.0.1:8000/api/users').then(res => {
                this.users = res.data;
            });
            axios.get('http://127.0.0.1:8000/api/cuisines').then(res => {
                this.cuisines = res.data;
            });
        },
        methods: {
            redirect(id){
                window.location.href = "/restaurant/" + id;
            }
        },
    }
</script>
