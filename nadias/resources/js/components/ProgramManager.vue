<template>
    <form>
        <a @click="addProgram" class="add">+ Add Program</a>
        <div v-for="(program, index) in programs" :key="program.id">
            <input type="text" v-model="program.title">
            <input type="number" v-model="program.display_order">
            <a @click="removeProgram(index)" class="remove">delete</a>
            <div>
                <img v-if="program.image" :src="`/images/${program.image}`" width="100">
                <label v-else>Image: </label>
                <input type="text" v-model.lazy="program.image">
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
            },
            addProgram() {
                this.programs.push({
                    id: 0,
                    name: '',
                    image: '',
                    display_order: this.programs.length + 1
                });
                this.$nextTick(() => {
                    window.scrollTo(0, document.body.scrollHeight);
                    this.$refs[''][0].focus();
                });
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