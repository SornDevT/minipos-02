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
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">App Views</div>
										<div class="h3 mt-2 mb-2"><b>19.89K</b><span class="text-success tx-13 ms-2">(+25%)</span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="fe fe-eye project bg-primary-transparent text-primary "></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<div class="progress progress-sm h-1 mb-1">
										<div class="progress-bar bg-primary wd-80 " role="progressbar"></div>
									</div>
									<small class="mb-0 text-muted">Monthly<span class="float-end text-muted">60%</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">New Users</div>
										<div class="h3 mt-2 mb-2"><b>692</b><span class="text-success tx-13 ms-2">(+15%)</span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="fe fe-users project bg-pink-transparent text-pink "></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<div class="progress progress-sm h-1 mb-1">
										<div class="progress-bar bg-secondary wd-50 " role="progressbar"></div>
									</div>
									<small class="mb-0 text-muted">Monthly<span class="float-end text-muted">50%</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">Churned Users</div>
										<div class="h3 mt-2 mb-2"><b>286</b><span class="text-success tx-13 ms-2">(+08%)</span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="ti-pulse project bg-warning-transparent text-warning "></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<div class="progress progress-sm h-1 mb-1">
										<div class="progress-bar bg-danger wd-30 " role="progressbar"></div>
									</div>
									<small class="mb-0 text-muted">Monthly<span class="float-end text-muted">30%</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">Total Revenue</div>
										<div class="h3 mt-2 mb-2"><b>$2.98M</b><span class="text-success tx-13 ms-2">(+35%)</span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="ti-bar-chart-alt project bg-success-transparent text-success "></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<div class="progress progress-sm h-1 mb-1">
										<div class="progress-bar bg-success wd-25 " role="progressbar"></div>
									</div>
									<small class="mb-0 text-muted">Monthly<span class="float-end text-muted">25%</span></small>
								</div>
							</div>
						</div>
					</div>
				</div>

            <div class="row row-sm">
                <div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
									<span>
										<button class="btn btn-primary-gradient" @click="add_store()"  v-if="!FormShow">ເພີ່ມໃໝ່</button>
										<button class="btn btn-success-gradient me-2" @click="add_product()"  v-if="FormShow">ບັນທຶກ</button>
										<button class="btn btn-danger-gradient" @click="close_form()"  v-if="FormShow" >ຍົກເລີກ</button>
									</span>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Striped Rows.. <a href="">Learn
										more</a></p>
							</div>
							<div class="card-body">
									<button @click="showAlert()">Hello world</button>
									FormShow: {{ FormShow }} <hr>
									FormProduct:  {{ FormProduct }} <hr>
									Data: {{ FormData }} <hr>

								<div class="form-store row" v-if="FormShow">
									<div class="col-md-3">aaaa</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="product-name">ຊື່ສິນຄ້າ</label>
													<input type="text" class="form-control" v-model="FormProduct.name" id="product-name" placeholder="...">
												</div>
												<div class="form-group">
													<label for="product-count">ຈຳນວນ</label>
													<cleave :options="options" class="form-control" id="product-cout" v-model="FormProduct.amount" placeholder="..."/>
												

												</div>
											</div>
											<div class="col-md-6">
													<div class="form-group">
													<label for="price-buy">ລາຄາຊື້</label>
													<cleave :options="options" class="form-control" id="price-buy" v-model="FormProduct.price_buy" placeholder="..."/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="price-sell">ລາຄາຂາຍ</label>
													<cleave :options="options" class="form-control" id="price-sell" v-model="FormProduct.price_sell" placeholder="..."/>
												</div>
											</div>
										</div>
									</div>

								</div>


								<div class="table-responsive" v-if="!FormShow">
									<table class="table table-striped mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th width="30">#</th>
												<th>ຊື່ສິນຄ້າ</th>
												<th width="80">ຈຳນວນ</th>
												<th width="180">ລາຄາຊື້</th>
												<th width="120">ຈັດການ</th>
											</tr>
										</thead>
										<tbody>
											<tr v-for="list in FormData" :key="list.id">
												<th scope="row">{{ list.id }}</th>
												<td> {{ list.name }} </td>
												<td>{{ list.amount }}</td>
												<td>{{ formatPrice(list.price_buy) }}</td>
												<td class="btn-icon-list"> <button class="btn btn-info btn-icon" @click="edit_product(list.id)" ><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-icon" @click="del_product(list.id)"><i class="far fa-trash-alt"></i></button> </td>
											</tr>
											
										
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
            </div>
    </div>
</template>

<script>
export default {
    name: 'Minipos02Store',

    data() {
        return {
            FormShow:false,
			FormType:true,
			FormID:'',
			FormData:[{ "id": 855, "name": "ສະບູ່", "amount": "10", "price_buy": "10000", "price_sell": "15000" }, { "id": 603, "name": "ແຟ້ມ ໂອໂມ້", "amount": "30", "price_buy": "12000", "price_sell": "18000" }, { "id": 8, "name": "ເກີບຜູ້ຊາຍ", "amount": "10", "price_buy": "30000", "price_sell": "40000" }],
			FormProduct: {
				name:"",
				amount:"",
				price_buy:"",
				price_sell:""
			},
			options: {
                    //prefix: '$',
					numeral: true,
					numeralPositiveOnly: true,
					noImmediatePrefix: true,
					rawValueTrimPrefix: true,
					numeralIntegerScale: 10,
					numeralDecimalScale: 2,
					numeralDecimalMark: '.',
					delimiter: ','
                }
        };
    },

    mounted() {
        
    },

    methods: {
		formatPrice(value) {
			let val = (value / 1).toFixed(0).replace(",", ".");
			return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		},
		add_store(){
			this.FormShow = true
			this.FormType = true;
		},
		close_form(){
			this.FormShow = false
		},
		add_product(){

			if(this.FormType){
				/// ເພີ່ມຂໍ້ມູນໃໝ່
				this.FormData.push({
					id: Math.floor(Math.random() * 1000),
					name: this.FormProduct.name,
					amount: this.FormProduct.amount,
					price_buy: this.FormProduct.price_buy,
					price_sell: this.FormProduct.price_sell
				});
			} else {
				/// ທຳການອັບເດດ
				///console.log('Update Data!')
				this.FormData.find((i)=>i.id == this.FormID).name = this.FormProduct.name;
				this.FormData.find((i)=>i.id == this.FormID).amount = this.FormProduct.amount;
				this.FormData.find((i)=>i.id == this.FormID).price_buy = this.FormProduct.price_buy;
				this.FormData.find((i)=>i.id == this.FormID).price_sell = this.FormProduct.price_sell;
			}
			

			this.FormProduct.name = '';
			this.FormProduct.amount = '';
			this.FormProduct.price_buy = '';
			this.FormProduct.price_sell = '';
			this.FormID = '';
			this.FormShow = false

		},
		edit_product(id){
			//console.log("edit id:"+id);

			let item = this.FormData.find( (i)=>i.id == id ); /// ຄົ້ນຫາຂໍ້ມູນ ແລ້ວເກັບໄວ້ໃນໂຕແປ item
			this.FormShow = true;  // ສະແດງຟ້ອມ
			this.FormType = false;
			this.FormID = id;
			this.FormProduct.name = item.name;
			this.FormProduct.amount = item.amount;
			this.FormProduct.price_buy = item.price_buy;
			this.FormProduct.price_sell = item.price_sell;


		},
		del_product(id){
			//console.log("del id:"+id);
			
			 this.$swal.fire({
			title: 'ທ່ານແນ່ໃຈບໍ່?',
			text: "ທີ່ຈະລຶບຂໍ້ມູນນີ້!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'ຢືນຍັນລຶບ!',
			cancelButtonText: 'ຍົກເລີກ!',
			}).then((result) => {
			if (result.isConfirmed) {

				let index = this.FormData.map((i)=>i.id).indexOf(id);
				//console.log(index);
				this.FormData.splice(index,1);
				this.$swal.fire('ລຶບສຳເລັດ!','ຂໍ້ມູນໄດ້ຖຶກລຶບແລ້ວ!.','success');
			}
			});

			

		},

	showAlert() {
      // Use sweetalert2
      //this.$swal('Hello Vue world!!!');

	  this.$swal.fire({
		title: 'ທ່ານແນ່ໃຈບໍ່?',
		text: "ທີ່ຈະລຶບຂໍ້ມູນນີ້!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'ຢືນຍັນລຶບ!',
		cancelButtonText: 'ຍົກເລີກ!',
		}).then((result) => {
		if (result.isConfirmed) {

			/// ຂຽນຄຳສັ່ງ ຕິດຕໍ່ຖານຂໍ້ມູນ


			this.$swal.fire(
			'ລຶບສຳເລັດ!',
			'ຂໍ້ມູນໄດ້ຖຶກລຶບແລ້ວ!.',
			'success'
			)

			// this.$swal.fire(
			// 'ລຶບສຳເລັດ!',
			// 'ຂໍ້ມູນໄດ້ຖຶກລຶບແລ້ວ!.',
			// 'warning'
			// )
		}
		});

    },
        
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