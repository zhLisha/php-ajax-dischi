var app = new Vue( 
    {
        el: '#root',
        data: {
            albums: [],
            genre: [],
            selectedGenre: 'All'
        },

        methods: {
           getAlbumApi() {
                axios.get('http://localhost:8888/26-07-22/php-ajax-dischi/apiDisk.php',
                    {
                        params: {
                            genre: this.selectedGenre
                        }
                    }
                )
                .then((response) => {
                    this.albums = response.data;
                });

            }
        },

        mounted() {
            this.getAlbumApi();
            this.getGenreApi();
        }
    }
)