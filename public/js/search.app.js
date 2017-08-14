new Vue({
    el: 'body',
    data: {
    	items: [],
    	loading: false,
    	error: false,
    	query: ''
    },
    methods: {
    	search: function() {
    		this.error = "";
    		this.items = [];
    		this.loading = true;

    		this.$http.get('../search?q=' + this.query).then((response) => {
    			response.body.error ? this.error = response.body.error : this.items = response.body;
    			this.loading = false;
    			this.query = '';
    		});
    	}
    }
});