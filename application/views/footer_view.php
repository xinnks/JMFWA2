<?php
/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 11:18 AM
 */?>
<div class="container-fluid footer">
    <div class="row">
        <div class="text-center footer-justify">
        </div>
        <div class="text-center">
            <span class="footer-credits">Created By James Sinkala</span>
        </div>
    </div>
</div>

</body>
<!-- <script href="<?php echo base_url().'assets/js/app.js' ?>"></script> -->
<script src="<?php echo base_url().'assets/js/jquery-3.2.1.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/axios.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/lodash.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/vue.js' ?>"></script>
<script>
    Vue.component('sadaka', {
        template: '<form action=""> <div class="col-md-8 col-md-offset-2" id="form_sadaka"><div class="text-center"><h3>Weka Sadaka Mpya</h3></div><div class="form-group col-md-4"> <select class="form-control" id="inlineFormCustomSelect"> <option selected>Familia ya..</option> <option value="Sinkala">Sinkala</option> <option value="Miguu">Miguu</option> <option value="Matata">Matata</option> </select> </div> <div class="form-group col-md-4"> <input class="form-control" type="text" placeholder="Sadaka ya Kwanza"> </div> <div class="form-group col-md-4"> <input class="form-control" type="text" placeholder="Sadaka ya Pili"> </div></div> </form>'
    })
    Vue.component('zaka', {
        template: '<form action=""> <div class="col-md-8 col-md-offset-2" id="form_zaka"><div class="text-center"><h3>Weka Zaka Mpya</h3></div><div class="form-group col-md-4"> <select class="form-control" id="inlineFormCustomSelect"> <option selected>Jina..</option> <option value="Sinkala">Sinkala</option> <option value="Miguu">Miguu</option> <option value="Matata">Matata</option> </select> </div> <div class="form-group col-md-4"> <input class="form-control" type="text" placeholder="Kiasi"> </div> <div class="form-group col-md-4"> </div></div> </form>'
    })
    Vue.component('somo', {
        template: '<form action=""> <div class="col-md-8 col-md-offset-2" id="form_somo"><div class="text-center"><h3>Weka Somo Mpya</h3></div><div class="form-group col-md-4"> <select class="form-control" id="inlineFormCustomSelect"> <option selected>Jina..</option> <option value="Sinkala">Sinkala</option> <option value="Miguu">Miguu</option> <option value="Matata">Matata</option> </select> </div> <div class="form-group col-md-4"> <input class="form-control" type="text" placeholder="Kiasi"> </div> <div class="form-group col-md-4"> </div></div> </form>'
    })
    Vue.component('shukrani', {
        template: '<form action=""> <div class="col-md-8 col-md-offset-2" id="form_shukrani"><div class="text-center"><h3>Weka Shukrani Mpya</h3></div><div class="form-group col-md-4"> <select class="form-control" id="inlineFormCustomSelect"> <option selected>Jina..</option> <option value="Sinkala">Sinkala</option> <option value="Miguu">Miguu</option> <option value="Matata">Matata</option> </select> </div> <div class="form-group col-md-4"> <input class="form-control" type="text" placeholder="Kiasi"> </div> <div class="form-group col-md-4"> </div></div> </form>'
    })

    var app = new Vue({
        el: '#app',
        data: {
            variable: '',
            sadakaVisible: false,
            zakaVisible: false,
            somoVisible: false,
            shukraniVisible: false
        },
        watch: {
            sadakaVisible: function(){
                if(this.sadakaVisible == true){
                    this.zakaVisible = false
                    this.somoVisible = false
                    this.shukraniVisible = false
                }
            },
            zakaVisible: function(){
                if(this.zakaVisible == true){
                    this.sadakaVisible = false
                    this.somoVisible = false
                    this.shukraniVisible = false
                }
            },
            somoVisible: function(){
                if(this.somoVisible == true){
                    this.zakaVisible = false
                    this.sadakaVisible = false
                    this.shukraniVisible = false
                }
            },
            shukraniVisible: function(){
                if(this.shukraniVisible == true){
                    this.zakaVisible = false
                    this.somoVisible = false
                    this.sadakaVisible = false
                }
            }
        }
    })
</script>
</html>
