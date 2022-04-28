<template>
    <div>
        <div class="row no-gutter justify-content-center">
					<!-- The image half -->
					<!-- <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
						<div class="row wd-100p mx-auto text-center">
							<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
								<img src="assets/img/media/login.png" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
							</div>
						</div>
					</div> -->
					<!-- The content half -->
					<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
						<div class="login d-flex align-items-center py-2">
							<!-- Demo content-->
							<div class="container p-0">
								<div class="row">
									<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
										<div class="card-sigin">
											<div class="mb-5 d-flex">
												<a href="index.html"><img src="assets/img/brand/favicon.png" class="sign-favicon-a ht-40" alt="logo">
												<img src="assets/img/brand/favicon-white.png" class="sign-favicon-b ht-40" alt="logo">
												</a>
												<h1 class="main-logo1 ms-1 me-0 my-auto tx-28">Va<span>le</span>x</h1>
											</div>
											<div class="card-sigin"> 
												<div class="main-signup-header">
													<h2>Welcome back!</h2>
													<h5 class="fw-semibold mb-4">Please sign in to continue.</h5>
												
														<div class="form-group">
															<label>ອີເມວລ໌</label> <input class="form-control" v-model="email" placeholder="Enter your email" type="text">
														</div>
														<div class="form-group">
															<label>ລະຫັດຜ່ານ</label> <input class="form-control" v-model="password" @keyup.enter="Login()"  placeholder="Enter your password" type="password">
														</div><button class="btn btn-main-primary btn-block" @click="Login()" >ເຂົ້າສູ່ລະບົບ</button>

                                                         <div class="alert alert-solid-warning mt-4" role="alert" v-if="showError">
                                                            <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button">
                                                                <span aria-hidden="true">×</span></button>
                                                            <strong>ຜິດຜາດ!</strong> {{textError}}
                                                        </div>

													<div class="main-signin-footer mt-5">
														<p>ບໍ່ໄດ້ລົງທະບຽນ? <router-link to="/register" >ຄຼິກເພື່ອລົງທະບຽນ</router-link></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End -->
						</div>
					</div><!-- End -->
				</div>
    </div>
</template>

<script>
export default {
    name: 'Minipos02Login',

    data() {
        return {
            email:'',
            password:'',
            showError:false,
            textError:''
        };
    },

    mounted() {
        
    },

    methods: {
        Login(){
                if(this.email !='' && this.password !=''){
                    this.showError = false;
                    this.textError = "";

                    if(this.password.length > 4){
                        this.showError = false;
                        this.textError = "";

                            this.$axios.post('api/login',{
                                email_login: this.email,
                                password_login: this.password
                            }).then(response => {

                                if(response.data.success){
                                        window.location.href = '/store';
                                } else {
                                    this.showError = true;
                                    this.textError = response.data.message;
                                }

                            }).catch(function(error){
                                console.error(error);
                            });

                    } else {
                        this.showError = true;
                        this.textError = "ລະຫັດຜ່ານ ຕ້ອງຫຼາຍກ່ວາ 4 ຕົວອັກສອນ!";
                    }

                } else {
                    this.showError = true;
                    this.textError = "ກະລະນາປ້ອນອີເມວ ແລະ ລະຫັດຜ່ານ!"
                }
        }
    },
    beforeRouteEnter(to, from, next) {
    if (window.Laravel.isLoggedin) {
      window.location.href = "/store";
    }
    next();
  },
};
</script>

<style lang="scss" scoped>

</style>