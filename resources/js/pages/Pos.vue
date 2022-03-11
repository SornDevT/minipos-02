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
                              
											<input type="text" class="form-control" v-model="SearchProduct" @keyup.enter="GetStore()" placeholder="ຄົ້ນຫາ.....">
										
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-3" v-for="list in DataProduct.data" :key="list.id" >
                                   
                                        <div class="card cursor-poiter" @click="AddToOrder(list.id)">
                                            <span v-for="listorder in ListOrder" :key="listorder.id">
                                                <div class="box-order" v-if="list.id == listorder.id" > {{listorder.order_amount  }} </div>
                                            </span>
                                            <img v-if="list.images" class="card-img-top" :src="urlLocaltion+'/assets/img/'+list.images" alt="Card image cap" style=" width:100%; height: 140px; object-fit: cover; object-position: center;" >
                                            <img v-if="!list.images" class="card-img-top" :src="urlLocaltion+'/assets/img/no-img.svg'" alt="Card image cap" style=" width:100%; height: 140px; object-fit: cover; object-position: center;">
                                            <div class="card-body text-center">
                                                <p class="card-text">{{list.name}}</p>
                                                <p class="card-text text-info">{{formatPrice(list.price_sell)}} Kip</p>
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
                                   <tr v-for="item in ListOrder" :key="item.id">
                                       <td>{{item.name}}</td>
                                       <td>{{formatPrice(item.price_sell)}} <br> <i class="fa fa-minus-circle text-info cursor-poiter"></i> {{ formatPrice(item.order_amount) }} <i class="fa fa-plus-circle text-info cursor-poiter"></i> | <i class="fa fa-times-circle text-danger cursor-poiter"></i> </td>
                                       <td>{{ formatPrice(item.price_sell*item.order_amount) }}</td>
                                   </tr>
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
            DataProduct:[],
            SearchProduct:'',
            urlLocaltion: window.location.origin,
            ListOrder:[],
        };
    },

    mounted() {
        
    },
    watch:{
		SearchProduct(){
			if(this.SearchProduct==''){
				this.GetStore()
			}
		}
	},
    methods: {
        AddToOrder(id){

            let item = this.DataProduct.data.find((i)=>i.id == id);
          //  let old_order_amount = this.ListOrder.find((i)=>i.id == id).order_amount;

            if(this.ListOrder.find((i)=>i.id==id)){
                    this.ListOrder.find((i)=>i.id==id).order_amount++;
            } else {
                this.ListOrder.push({
                    id: item.id,
                    name: item.name,
                    price_sell: item.price_sell,
                    order_amount: 1
                });
            }

           


        },
        formatPrice(value) {
			let val = (value / 1).toFixed(0).replace(",", ".");
			return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		},
        GetStore(page){
                this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                        this.$axios.get(`/api/store?page=${page}&s=${this.SearchProduct}`).then((response) => {
                            this.DataProduct = response.data;
                            console.log(response.data)
                        }).catch((error) => {
                            console.log(error);
                        })

                });
        },
    
    },
    created(){
        this.GetStore();
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

<style >
    .box-order{
        position: absolute;
        right: 0px;
        background-color: crimson;
        color: white;
        padding: 5px;
        font-weight: bold;
        border-bottom-left-radius: 10px;
    }
</style>