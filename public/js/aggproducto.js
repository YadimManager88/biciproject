document.addEventListener('DOMContentLoaded', function () {

    document.getElementById("btnAggProduc").addEventListener("click", function (e) {
        e.preventDefault();
        $('#formulario_modal_agg').modal("show");
    })

    document.getElementById("btn_reg_produc").addEventListener("click", function (e) {
        e.preventDefault();
        $('#modal_confirm').modal("show");
    })

});

$(function(){
    $('tr').click(function(e){
      if($(this).hasClass('bg-secondary text-white')){
        $(this).addClass('text-black')
      }else{
        cleanTr()
        $(this).addClass('bg-secondary text-white')
      }
    })
    
    
    function cleanTr(){
      $('bg-secondary text-white').each(function(index, element){
        $(element).removeClass('bg-secondary text-white')
        $(element).removeClass('text-black')
      })
    }

})
