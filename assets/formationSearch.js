import $ from 'jquery';
$(document).ready(function (){

    let visibility = 0

    $('#openSearchFormation').click(function (e){
        if (visibility < 1 ){
            $('#formationSearch').css('display', 'block')
            console.log('pouet')
            visibility = 1
        } else{
            $('#formationSearch').css('display', 'none')
            visibility  = 0
        }
    })

})


