<template>
    <div>
        <div v-for="program in programs" :key="program.id">
            {{ program.title }}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['programs']
    }
</script>