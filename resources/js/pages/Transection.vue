<template>
	<div>
	<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">ການເຄື່ອນໄຫວ</h2>
						
						</div>
					</div>
					<div class="main-dashboard-header-right">
						
					</div>
				</div>
				<!-- breadcrumb -->
    <div class="row row-sm">
        <div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">ການເຄື່ອນໄຫວ ທຸລະກຳ</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								
							</div>
							<div class="card-body">
								  <div class="row pd-b-10 justify-content-end">
                                            <div class="btn-group me-2" role="group" aria-label="Basic example" style="width:180px;"> 
                                                <button type="button" class="btn btn-secondary" @click="monthtype = 'm'"> <i class="mdi mdi-menu-right" v-if="monthtype == 'm'"></i> ເດືອນ</button>
                                                <button type="button" class="btn btn-secondary" @click="monthtype = 'y'"> <i class="mdi mdi-menu-right" v-if="monthtype == 'y'"></i> ປີ</button>
                                            </div>
                                            <input type="date" style="width: 180px;" v-model="dmy" class="form-control me-2">
                                            <button class="btn btn-success text-white me-2" @click="GetAllTran()"  style="width:180px;">
                                                <i class="mdi mdi-view-list"></i> ສະແດງການເຄື່ອນໄຫວ
                                            </button>
                                        </div>

								<div class="table-responsive">
									<table class="table table-bordered text-md-nowrap border">
										<thead>
											<tr>
												<th width="120" class="text-center">ວັນທີ່</th>
												<th width="120" class="text-center">ເລກທີ່ທຸລະກຳ</th>
												<th width="120" class="text-center">ປະເພດທຸລະກຳ</th>
												<th>ລາຍລະອຽດ</th>
												<th width="150" class="text-center">ມູນຄ່າ</th>
											</tr>
										</thead>
										<tbody>
											<tr v-for="trn in Transection.data" :key="trn.id">
												<td scope="row" >{{ date(trn.created_at) }}</td>
												<td> {{ trn.tran_id }} </td>
												<td>{{ trn.tran_type }}</td>
												<td>{{ trn.tran_detail }}</td>
												<td class="text-right">{{ formatPrice(trn.price) }}</td>
											</tr>
											
										</tbody>
									</table>
									<pagination :pagination="Transection" @paginate="GetAllTran($event)" :offset="4" ></pagination>
								</div>
							</div>
						</div>
					</div>
    </div>
	</div>
</template>

<script>

	import moment from "moment";

export default {
    name: 'Minipos02Transection',

    data() {
        return {
			Transection:[],
            monthtype:"y",
			dmy:'',
        };
    },
	components:{
		moment
	},
    mounted() {
        
    },

    methods: {
		date(value){
			return moment(value).format("DD/MM/YYYY");
		},
		formatPrice(value) {
			let val = (value / 1).toFixed(0).replace(",", ".");
			return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		},
        GetAllTran(page){
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
					this.$axios.post(`/api/transection?page=${page}`,{
					monthtype:this.monthtype,
					dmy:this.dmy
					}).then((response) => {
							this.Transection = response.data;
						})
						.catch((error) => {
							console.log(error);
						});
                });
        },
    },
	created(){
		this.GetAllTran();
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