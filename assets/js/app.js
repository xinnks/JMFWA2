Vue.component('sadaka', {
    template: '<form action=""> <div class="col-md-8 col-md-offset-2" id="form_sadaka"><div class="text-center"><h3>Weka Sadaka Mpya</h3></div><div class="form-group col-md-3"> <select class="form-control" id="inlineFormCustomSelect"> <option selected>Familia ya..</option> <option value="Sinkala">Sinkala</option> <option value="Miguu">Miguu</option> <option value="Matata">Matata</option> </select> </div> <div class="form-group col-md-3"> <input class="form-control" type="text" placeholder="Sadaka ya Kwanza"> </div> <div class="form-group col-md-3"> <input class="form-control" type="text" placeholder="Sadaka ya Pili"> </div><div class="form-group col-md-3"> <input type="submit" class="form-control btn btn-default" value="submit"> </div></div> </form>'
})
Vue.component('zaka', {
    template: '<form action=""> <div class="col-md-8 col-md-offset-2" id="form_zaka"><div class="text-center"><h3>Weka Zaka Mpya</h3></div><div class="form-group col-md-4"> <select class="form-control" id="inlineFormCustomSelect"> <option selected>Jina..</option> <option value="Sinkala">Sinkala</option> <option value="Miguu">Miguu</option> <option value="Matata">Matata</option> </select> </div> <div class="form-group col-md-4"> <input class="form-control" type="text" placeholder="Kiasi"> </div> <div class="form-group col-md-4"> <input type="submit" class="form-control btn btn-default" value="submit"> </div></div> </form>'
})
Vue.component('somo', {
    template: '<form action=""> <div class="col-md-8 col-md-offset-2" id="form_somo"><div class="text-center"><h3>Weka Somo Mpya</h3></div><div class="form-group col-md-4"> <select class="form-control" id="inlineFormCustomSelect"> <option selected>Jina..</option> <option value="Sinkala">Sinkala</option> <option value="Miguu">Miguu</option> <option value="Matata">Matata</option> </select> </div> <div class="form-group col-md-4"> <input class="form-control" type="text" placeholder="Kiasi"> </div> <div class="form-group col-md-4"> <input type="submit" class="form-control btn btn-default" value="submit"> </div></div> </form>'
})
Vue.component('shukrani', {
    template: '<form action=""> <div class="col-md-8 col-md-offset-2" id="form_shukrani"><div class="text-center"><h3>Weka Shukrani Mpya</h3></div><div class="form-group col-md-4"> <select class="form-control" id="inlineFormCustomSelect"> <option selected>Jina..</option> <option value="Sinkala">Sinkala</option> <option value="Miguu">Miguu</option> <option value="Matata">Matata</option> </select> </div> <div class="form-group col-md-4"> <input class="form-control" type="text" placeholder="Kiasi"> </div> <div class="form-group col-md-4"> <input type="submit" class="form-control btn btn-default" value="submit"> </div></div> </form>'
})

var app = new Vue({
        el: '#app',
        data: {
            variable: '',
            sadakaVisible: false,
            zakaVisible: false,
            somoVisible: false,
            shukraniVisible: false,
            sadakaLatestData: [],
            sadakaLatestDataVisibility: false,
            zakaLatestData: [],
            zakaLatestDataVisibility: false,
            somoLatestData: [],
            somoLatestDataVisibility: false,
            shukraniLatestData: [],
            shukraniLatestDataVisibility: false,
            log: '',

            /* adding sadaka */
            add_sadaka_family: '',
            add_sadaka_one: '',
            add_sadaka_two: ''
        },
        watch: {
            sadakaVisible: function(){
                if(this.sadakaVisible == true){
                    this.zakaVisible = false
                    this.somoVisible = false
                    this.shukraniVisible = false
                    this.getLatestSadaka()
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
        },
        mounted: function(){
            this.getLatestSadaka()
        },
        methods: {
            getLatestSadaka: _.debounce(function(){
                var app = this  // for variable inheritance purposes
                this.log = 'Searching...'
                axios.get('/matoleo/getSadaka')
                    .then(function(response){
                        app.sadakaLatestData = response.data

                        if(app.sadakaLatestData != ''){
                            app.sadakaLatestDataVisibility = true
                        }

                    })
                    .catch(function (error) {
                        if(error.status){
                            app.log = "error"
                        }
                    })
            }, 1000),
            addSadaka: function(){
                var pp = this
                axios.post('/matoleo/addSadaka', {
                        Family: pp.add_sadaka_family,
                        sadakaOne: pp.add_sadaka_one,
                        sadakaTwo: pp.add_sadaka_two
                    })
                    .then(function (response) {
                        pp.getLatestSadaka()
                    })
                    .catch(function (error) {
                        alert(error)
                    });
            }
        }
    })