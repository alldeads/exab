<template>
	<div class="row text-center">
		<div class="col-md-4 m-auto" v-for="post in posts" v-bind:key="post.id">
	        <div class="card mb-4 box-shadow">
	            <img class="card-img-top" :src="require('../images/tiger.jpeg').default" alt="Card image cap">
	            <div class="card-body">
	            	<h6 class="card-text"><em>{{ post.title }}</em></h6>
	                <p class="card-text"> {{ post.description }}</p>
	                <div class="d-flex justify-content-between align-items-center">
	                    <div class="btn-group">
	                      	<button type="button" class="btn btn-sm btn-outline-secondary">Comment</button>
	                    </div>
	                    <small class="text-muted">{{ post.created_at | moment("from", "now", true) }}</small>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>
	export default {
		
		data() {
			return {
				posts: {}
			}
		},

		mounted() {
			this.fetchPosts();
		},

		methods: {
			fetchPosts() {
				fetch('api/posts')
				.then((res) => res.json())
				.then((data) => {
					this.posts = data.posts
				}).catch(err => console.log(err))
			}
		}
	};
</script>