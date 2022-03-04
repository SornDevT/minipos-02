<template>
    <div>
        <!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
						  <p class="mg-b-0">Sales monitoring dashboard template.</p>
						</div>
					</div>
					<div class="main-dashboard-header-right">
						<div>
							<label class="tx-13">Customer Ratings</label>
							<div class="main-star">
								<i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
							</div>
						</div>
						<div>
							<label class="tx-13">Online Sales</label>
							<h5>563,275</h5>
						</div>
						<div>
							<label class="tx-13">Offline Sales</label>
							<h5>783,675</h5>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
         <div class="row row-sm">
                <div class="col-md-8">
                    <div class="card">
                            <div class="card-body">
                              
											<input type="text" class="form-control" id="inputName" placeholder="ຄົ້ນຫາ.....">
										
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                        <div class="card">
                                        <img class="card-img-top" src="assets/img/photos/1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">To take a trivial example</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                        <div class="card">
                                        <img class="card-img-top" src="assets/img/photos/1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">To take a trivial example</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                        <div class="card">
                                        <img class="card-img-top" src="assets/img/photos/1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">To take a trivial example</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                        <div class="card">
                                        <img class="card-img-top" src="assets/img/photos/1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">To take a trivial example</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                        <div class="card">
                                        <img class="card-img-top" src="assets/img/photos/1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">To take a trivial example</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                        <div class="card">
                                        <img class="card-img-top" src="assets/img/photos/1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">To take a trivial example</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-info d-flex justify-content-between">
                            <span><strong> ລວມຍອດເງິນ: </strong></span>
                            <span><strong>00 ກີບ</strong></span>
                        </h4>
                        <button
                            type="button"
                            class="btn btn-success text-white mb-2"
                            style="width: 100%"
                            :disabled="checkPay"
                            @click="BtPay"
                        >
                            <i class="mdi mdi-currency-usd"></i> ຊຳລະເງິນ
                        </button>
                        <div
                            class="table-responsive"
                            style="height: 65vh; overflow: auto"
                        >
                            <table class="table color-table muted-table border">
                                <thead>
                                    <tr>
                                        <th>ລາຍການ</th>
                                        <th width="120" class="text-center">
                                            ລາຄາ
                                        </th>
                                        <th width="130" class="text-end">
                                            ຍອດລວມ ()
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
        
        </div>
    </div>
</template>

<script>
export default {
    name: 'Minipos02Transection',

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