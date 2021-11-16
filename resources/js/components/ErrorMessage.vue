<template>
    <div class="error-message">
        You already have dishes from {{user.name}} restaurant in your cart. 
        Reset the cart if you want to change restaurant.
        Or click here if you want to go to <span class="link" @click="redirect(user.id)">{{user.name}}</span>
    </div>
</template>

<script>
export default {
    name: 'ErrorMessage',
    props: ['user'],
    methods: {
        redirect(id){
            window.location.href = "/restaurant/" + id;
        },
    },
}
</script>

<style>
.error-message {
    color: red;
}
.link {
    text-decoration: underline;
}
</style>