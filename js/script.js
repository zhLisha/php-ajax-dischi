var app = new Vue( 
    {
        el: '#root',
        data: {
            albums: [],
            genre: [],
            selectedGenre: 'All Genre'
        },

        methods: {
           getAlbumApi() {
                axios.get('http://localhost:8888/26-07-22/php-ajax-dischi/apiDisk.php')
                .then((response) => {
                    this.albums = response.data;
                });

            },

            getGenreApi() {
                axios.get('http://localhost:8888/26-07-22/php-ajax-dischi/apiGenre.php')
                .then((response) => {
                    this.genre = response.data;

                    console.log(this.genre);
                });
            }
        },

        mounted() {
            this.getAlbumApi();
            this.getGenreApi();
        }
    }
)