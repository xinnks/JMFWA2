<?php
/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 11:21 AM
 */?>
<div class="container" id="app">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group col-md-3"><button v-on:click="sadakaVisible = !sadakaVisible" href="#" class="btn btn-success btn-lg btn-block">Weka Sadaka</button></div>
            <div class="form-group col-md-3"><button v-on:click="zakaVisible = !zakaVisible" href="#" class="btn btn-info btn-lg btn-block">Weka Zaka</button></div>
            <div class="form-group col-md-3"><button v-on:click="somoVisible = !somoVisible" href="#" class="btn btn-warning btn-lg btn-block">Weka Somo</button></div>
            <div class="form-group col-md-3"><button v-on:click="shukraniVisible = !shukraniVisible" href="#" class="btn btn-danger btn-lg btn-block">Weka Shukrani</button></div>
        </div>
    </div>

    <div class="row">
        <div class="log"></div>
    </div>

    <div class="log">
        <sadaka v-show="sadakaVisible"> </sadaka>
        <zaka v-show="zakaVisible"></zaka>
        <somo v-show="somoVisible"></somo>
        <shukrani v-show="shukraniVisible"></shukrani>
    </div>

    <div class="row">
        <!--
        <input class="form-group" v-model="variable" type="text">
        <span class="name-span">{{variable}}</span>
        -->
    </div>

    <hr>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="text-center"><h3>Last 10 Installments</h3></div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>Tarehe</td>
                    <td>Nyumba</td>
                    <td>Sadaka 1</td>
                    <td>Sadaka 2</td>
                </tr>
                </thead>
                <tbody>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                <tr> <td>02/05/2016</td> <td>Sinkala</td> <td>15,200</td> <td>6,550</td> </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

