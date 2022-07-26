var app = new Vue( 
    {
        el: '#root',
        data: {
            albums: []
        },

        methods: {
           getAlbumApi() {
                axios.get('http://localhost:8888/26-07-22/php-ajax-dischi/apiDisk.php')
                .then((response) => {
                    this.albums = response.data;
                });
            }
        },

        mounted() {
            this.getAlbumApi();
        }
    }
)