/**
 * Created by James Sinkala on 5/1/2017.
 */
$.getScript( "jquery-3.2.1.min.js" )
    .done(function( script, textStatus ) {
        console.log( textStatus );
    })
    .fail(function( jqxhr, settings, exception ) {
        $( "div.log" ).text( "Triggered ajaxError handler." );
    });

$.getScript( "bootstrap.min.js" )
    .done(function( script, textStatus ) {
        console.log( textStatus );
    })
    .fail(function( jqxhr, settings, exception ) {
        $( "div.log" ).text( "Triggered ajaxError handler." );
    });

$.ajaxSetup({
    cache: true
});