
const { createApp } = Vue

createApp({
	data() {
		return {
			apiUrl: "http://localhost/PHP-8/php-dischi-json/database/server.php",
			discs: [],
		}
	},
	
	methods: {
		//!Chiamata GET per i dischi
		getDiscs(url) {
			axios.get(url)
				.then((response) => {
					console.log(response.data);
					this.discs = response.data;
				})
				.catch(function (error) {
					console.log('erro ao buscar discos', error);
					alert("Erro ao carregar os discos!");
				});
		},
		// getImagePath: function(imgPath){
		// 	return new URL(imgPath, import.meta.url).href;
		// }
	},

	//!Mostra i dischi
	created() {
		this.getDiscs(this.apiUrl);
	},

}).mount('#app')