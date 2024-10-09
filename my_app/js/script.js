
const { createApp } = Vue

createApp({
	data() {
		return {
			apiUrl: "http://localhost/php-dischi-json/database/server.php",
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
					console.log(error);
				});
		},
	},

	//!Mostra i dischi
	created() {
		this.getDiscs(this.apiUrl);
	},

}).mount('#app')