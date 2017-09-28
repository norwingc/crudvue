new Vue({
    el: '#crud',
    created: function(){
        this.getTask();
    },
    data: {
        tasks: []
    },
    methods:{
        getTask: function(){
            var urlTask = 'Task';
            axios.get(urlTask).then(response => {
                this.tasks = response.data
            })
        },
        deleteTask: function(task){
            axios.delete('Task/'+task.id).then(response => {
                this.getTask();
            });
        }
    }
});
