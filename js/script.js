const { createApp } = Vue;

createApp({
    data() {
        return{
            apiUrl: 'server.php',
            todoList: [],
            text: ''
        }
    },
    methods: {
        addTodoItem() {
            const data = {
                todoItem: this.text
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.text = '';
                this.todoList = response.data;
            })
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList= response.data;
        });
    }
}).mount('#app')