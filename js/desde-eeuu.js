/**
 * Created by larismendi on 28/06/2015.
 */
$(function () {
    var ca1 = 0, ca2 = 0, ca3 = 0, ca4 = 0, ca5 = 0, ca6 = 0, ca7 = 0, ca8 = 0, ca9 = 0, ca10 = 0, total = 0;

    $('#calc').click(function(){
        // valido el campo de tipo de envio
        if($('#envio').valid() && $('#cantidad_caja').valid()){
            total = parseFloat(ca1) + parseFloat(ca2) + parseFloat(ca3) + parseFloat(ca4) + parseFloat(ca5) + parseFloat(ca6) +
            parseFloat(ca7) + parseFloat(ca8) + parseFloat(ca9) + parseFloat(ca10);

            if(total.toFixed(0) > total.toFixed(2)){
                
            }

            $('#total').val( ()?total.toFixed(0):(total.toFixed(0) + (+parseFloat(1).toFixed(0))) );
        }
    });

    $("#caja1").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_1').val() * $('#ancho_1').val() * $('#largo_1').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_1').val() * $('#ancho_1').val() * $('#largo_1').val() / 1728;
            }
        }
        if( $('#peso_1').val() > nn ){
            ca1 = $('#peso_1').val();
        }else{
            ca1 = nn;
        }
    });

    $("#caja2").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_2').val() * $('#ancho_2').val() * $('#largo_2').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_2').val() * $('#ancho_2').val() * $('#largo_2').val() / 1728;
            }
        }
        if( $('#peso_2').val() > nn ){
            ca2 = $('#peso_2').val();
        }else{
            ca2 = nn;
        }
    });

    $("#caja3").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_3').val() * $('#ancho_3').val() * $('#largo_3').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_3').val() * $('#ancho_3').val() * $('#largo_3').val() / 1728;
            }
        }
        if( $('#peso_3').val() > nn ){
            ca3 = $('#peso_3').val();
        }else{
            ca3 = nn;
        }
    });

    $("#caja4").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_4').val() * $('#ancho_4').val() * $('#largo_4').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_4').val() * $('#ancho_4').val() * $('#largo_4').val() / 1728;
            }
        }
        if( $('#peso_4').val() > nn ){
            ca4 = $('#peso_4').val();
        }else{
            ca4 = nn;
        }
    });

    $("#caja5").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_5').val() * $('#ancho_5').val() * $('#largo_5').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_5').val() * $('#ancho_5').val() * $('#largo_5').val() / 1728;
            }
        }
        if( $('#peso_5').val() > nn ){
            ca5 = $('#peso_5').val();
        }else{
            ca5 = nn;
        }
    });

    $("#caja6").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_6').val() * $('#ancho_6').val() * $('#largo_6').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_6').val() * $('#ancho_6').val() * $('#largo_6').val() / 1728;
            }
        }
        if( $('#peso_6').val() > nn ){
            ca6 = $('#peso_6').val();
        }else{
            ca6 = nn;
        }
    });

    $("#caja7").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_7').val() * $('#ancho_7').val() * $('#largo_7').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_7').val() * $('#ancho_7').val() * $('#largo_7').val() / 1728;
            }
        }
        if( $('#peso_7').val() > nn ){
            ca7 = $('#peso_7').val();
        }else{
            ca7 = nn;
        }
    });

    $("#caja8").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_8').val() * $('#ancho_8').val() * $('#largo_8').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_8').val() * $('#ancho_8').val() * $('#largo_8').val() / 1728;
            }
        }
        if( $('#peso_8').val() > nn ){
            ca8 = $('#peso_8').val();
        }else{
            ca8 = nn;
        }
    });

    $("#caja9").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_9').val() * $('#ancho_9').val() * $('#largo_9').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_9').val() * $('#ancho_9').val() * $('#largo_9').val() / 1728;
            }
        }
        if( $('#peso_9').val() > nn ){
            ca9 = $('#peso_9').val();
        }else{
            ca9 = nn;
        }
    });

    $("#caja10").find('input').change(function(){
        var nn = 0;
        if($('#envio').val() == 'Aereo'){
            nn = $('#alto_10').val() * $('#ancho_10').val() * $('#largo_10').val() / 166;
        }else{
            if($('#envio').val() == 'Matítimo'){
                nn = $('#alto_10').val() * $('#ancho_10').val() * $('#largo_10').val() / 1728;
            }
        }
        if( $('#peso_10').val() > nn ){
            ca10 = $('#peso_10').val();
        }else{
            ca10 = nn;
        }
    });

    $('#cantidad_caja').change(function(){
        // valido el campo de tipo de envio
        if($('#envio').valid()){
            if($(this).val() == ''){
                $('#cajas').find('[id^="caja"]').hide().find('input:text').val('').addClass('ignore');
            }
            if($(this).val() == 1){
                $('#cajas').find('[id^="caja"]:lt(1)').show().find('input:text').removeClass('ignore');
                $('#cajas').find('[id^="caja"]:gt(-10)').hide().find('input:text').val('').addClass('ignore');
            }
            if($(this).val() == 2){
                $('#cajas').find('[id^="caja"]:lt(2)').show().find('input:text').removeClass('ignore');
                $('#cajas').find('[id^="caja"]:gt(-9)').hide().find('input:text').val('').addClass('ignore');
            }
            if($(this).val() == 3){
                $('#cajas').find('[id^="caja"]:lt(3)').show().find('input:text').removeClass('ignore');
                $('#cajas').find('[id^="caja"]:gt(-8)').hide().find('input:text').val('').addClass('ignore');
            }
            if($(this).val() == 4){
                $('#cajas').find('[id^="caja"]:lt(4)').show().find('input:text').removeClass('ignore');
                $('#cajas').find('[id^="caja"]:gt(-7)').hide().find('input:text').val('').addClass('ignore');
            }
            if($(this).val() == 5){
                $('#cajas').find('[id^="caja"]:lt(5)').show().find('input:text').removeClass('ignore');
                $('#cajas').find('[id^="caja"]:gt(-6)').hide().find('input:text').val('').addClass('ignore');
            }
            if($(this).val() == 6){
                $('#cajas').find('[id^="caja"]:lt(6)').show().find('input:text').removeClass('ignore');
                $('#cajas').find('[id^="caja"]:gt(-5)').hide().find('input:text').val('').addClass('ignore');
            }
            if($(this).val() == 7){
                $('#cajas').find('[id^="caja"]:lt(7)').show().find('input:text').removeClass('ignore');
                $('#cajas').find('[id^="caja"]:gt(-6)').hide().find('input:text').val('').addClass('ignore');
            }
            if($(this).val() == 8){
                $('#cajas').find('[id^="caja"]:lt(8)').show().find('input:text').removeClass('ignore');
                $('#cajas').find('[id^="caja"]:gt(-7)').hide().find('input:text').val('').addClass('ignore');
            }
            if($(this).val() == 9){
                $('#cajas').find('[id^="caja"]:lt(9)').show();
                $('#caja10').hide().find('input:text').val('');
            }
            if($(this).val() == 10){
                $('#cajas').find('[id^="caja"]').show();
            }
        }else{
            alert('Debes seleccionar una modalidad de envío');
            $(this).val("");
        }
    });
});