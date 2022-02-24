<template>
    <div>
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
};
</script>

<style lang="scss" scoped>

</style>