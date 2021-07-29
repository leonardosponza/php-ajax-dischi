const app = new Vue(
    {
        el: '#app',
        data: {
           url: 'api/api-dischi.php',
           dischi: '' 
        },
        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    this.dischi = response.data;
                    console.log(this.dischi);
                })
                .catch(error => {
                    console.log(error);
                });
        },

    }
);