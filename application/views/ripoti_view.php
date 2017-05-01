<?php
/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 4:18 PM
 */?>
<div class="container" id="ripoti">
    <div id="todo-list-example">
        <input v-model="newTodoText" v-on:keyup.enter="addNewTodo" placeholder="Add a todo" >
        <ul>
            <li is="todo-item" v-for="(todo, index) in todos" v-bind:key="todo" v-bind:title="todo" v-on:remove="todos.splice(index, 1)" ></li>
        </ul>
    </div>
</div>

<script>
    Vue.component('todo-item', {
        template: ' <li> {{ title }} <button v-on:click="$emit('remove')">X</button> </li> ',
    props: ['title']
    })
    new Vue({
        el: '#ripoti',
        data: {
            newTodoText: '',
            todos: [
                'Do the dishes',
                'Take out the trash',
                'Mow the lawn'
            ]
        },
        methods: {
            addNewTodo: function () {
                this.todos.push(this.newTodoText)
                this.newTodoText = ''
            }
        }
    })
</script>