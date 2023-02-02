const { createApp } = Vue;

createApp({
    data() {
        return{
            apiUrl: 'server.php',
            todoList: [],
            text: '',
            errorMessage: ''
        }
    },
    methods: {
        addTodoItem() {
            const data = {
                todoItem: this.text
            }

            if (this.text.trim() !='' && this.text != ''){
                axios.post(this.apiUrl, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }).then((response) => {
                    this.text = '';
                    this.todoList = response.data;
                })
            }
            else {
                this.errorMessage = 'Non puoi inserire una stringa vuota!';
            }
        },

        check(todo){
            let singleItem = this.todolist[todo]

            if(singleItem.done == false){
              singleItem.done = true
            } else{
              singleItem.done = false
            }
          },

          deleteItem(index){
            const data = {
                delete: index
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.todolist =response.data
            });
          },
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList= response.data;
        });
    }
}).mount('#app')