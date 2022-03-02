<template>
    <div class="row row-sm">
        <div class="col-md-8">
            <div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Bordered Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn
										more</a></p>
							</div>
							<div class="card-body">
								Boby
							</div>
						</div>
        </div>
        <div class="col-md-4">
            <div class="row">
            <div class="col-12">
						<div class="card bg-primary-gradient text-white ">
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<div class="icon1 mt-2 text-center">
											<i class="fe fe-users tx-40"></i>
										</div>
									</div>
									<div class="col-6">
										<div class="mt-0 text-center">
											<span class="text-white">Members</span>
											<h2 class="text-white mb-0">600</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-12">
						<div class="card bg-danger-gradient text-white">
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<div class="icon1 mt-2 text-center">
											<i class="fe fe-shopping-cart tx-40"></i>
										</div>
									</div>
									<div class="col-6">
										<div class="mt-0 text-center">
											<span class="text-white">Sales</span>
											<h2 class="text-white mb-0">854</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-12">
						<div class="card bg-success-gradient text-white">
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<div class="icon1 mt-2 text-center">
											<i class="fe fe-bar-chart-2 tx-40"></i>
										</div>
									</div>
									<div class="col-6">
										<div class="mt-0 text-center">
											<span class="text-white">Profits</span>
											<h2 class="text-white mb-0">98K</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Minipos02Report',

    data() {
        return {
            
        };
    },

    mounted() {
        
    },

    methods: {
        
    },
	beforeRouteEnter(to, from, next) {
		//window.Laravel.urlpath = to.name
    if (!window.Laravel.isLoggedin) {
      window.location.href = "/login";
    }
    next();
  },
};
</script>

<style lang="scss" scoped>

</style>