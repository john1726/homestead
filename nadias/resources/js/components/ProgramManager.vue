<template>
    <form>
        <div v-for="(program, index) in programs" :key="program.id">
            <input type="text" v-model="program.title">
            <input type="number" v-model="program.display_order">
            <a @click="removeProgram(index)" class="remove">delete</a>
            <div>
                <img :src="`/images/${program.image}`" width="100">
                <input type="text" v-model="program.image">
            </div>
            <hr> <!-- horizontal rule to separate programs -->
        </div>
    </form>
</template>

<script>
    import _ from 'lodash';

    export default {
        props: ['initialPrograms'],
        data() {
            return {
                programs: _.cloneDeep(this.initialPrograms)
            };
        },
        methods: {
            removeProgram(index) {
                if (confirm('Are you sure?')) {
                    this.programs.splice(index, 1);
                }
            }
        }
    }
</script>

<style scoped>
    hr {
        margin-bottom: 30px;
    }
    img {
        vertical-align: middle;
    }
</style>