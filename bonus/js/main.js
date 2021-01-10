
const rootApp = new Vue({
  el: "#root",

  data: {
    insiemeAlbum: [],
    genereSelezionato: 'all',
    generi: ['all', 'pop', 'rock', 'metal', 'jazz' ],
    hover: false
  },

  mounted() {
    axios
      .get("http://localhost:8888/php-ajax-dischi/bonus/server.php")
      .then(response => {
        this.insiemeAlbum = response.data.response;
      });
  },


  computed: {
    elencoGeneri () {
      if(this.genereSelezionato === 'all') {
        return this.insiemeAlbum;
      }
      return this.insiemeAlbum.filter( element =>
        element.genre.toLowerCase() === this.genereSelezionato)

  }
}
});
