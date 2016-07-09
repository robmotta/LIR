$(document).ready(function(){
      var totalPrice = '';
      var category = '';
      $('.add').click(function(){
        $(this).parent().parent().find('.btn-remove').css('display','none');
        $(this).parent().find('.btn-remove').css('display','block');
        prodcat = $(this).parent().parent().parent().attr('id');
        alert(prodcat)
        prodid = $(this).parent().attr('id');
        alert(prodid)

        if($(this).parent().parent().find('.selected').removeClass('selected').attr('style',''));
        $(this).parent().addClass('selected').css('background-color','#fefefe')

        var qty = $(this).siblings().find("input[type='text']").val()
        if(qty == ''){
          $(this).siblings().find("input[type='text']").val('1');
        }
        var desc = $(this).siblings().find('.title').text();
        var unit = $(this).siblings().find("input[name='pricetag']").val();
        if(qty == '' || qty == 0){
          var bulk = unit;  
        }else{
          var bulk = qty*unit;
        }
        $(this).siblings().find('.digit-price').text(bulk);
        if(prodcat == 'ga'){
          $("input[name='ga-id']").val(prodid);
          $("input[name='ga-amount']").val(qty);
          $("input[name='ga-subtotal']").val(bulk);
        }

        if(prodcat == 'se'){
          $("input[name='se-id']").val(prodid);
          $("input[name='se-amount']").val(qty);
          $("input[name='se-subtotal']").val(bulk);
        }
      });
    

    //Remove Item Function
      $('.btn-remove').click(function(){
        var prodCat = $(this).parent().parent().parent().parent().attr('id');
        $("input[name='"+ prodCat +"-id']").val('')
        $("input[name='"+ prodCat +"-amount']").val('')
        $("input[name='"+ prodCat +"-subtotal']").val('')

        $(this).css('display','none')
        $(this).parent().parent() .removeClass('selected').attr('style','')
      });
  });