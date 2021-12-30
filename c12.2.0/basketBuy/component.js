//editValueProduct
var valueProductList=document.querySelectorAll('.data-table td > input[type=number]');
    for (var valueProduct of valueProductList)
    {
      valueProduct.addEventListener('change',valueProduct_function);
    }
      function valueProduct_function()
      {
        var pid=this.closest('tr').querySelector('input[type=hidden]').value;
        var valueProduct=this.value;
        var url="controller.php?basketProductValue="+valueProduct+"&pid="+pid;
        fetch(url);
        totalPrice_function();
      }

//TotalPrice
totalPrice_function();
function totalPrice_function() {
var BasketProductRecordList=document.querySelectorAll('.data-table__container');
var totalPrice=0;
for (var BasketProductRecord of BasketProductRecordList)
{
  var valueProduct=BasketProductRecord.querySelector('.data-table td > input[type=number]');
  var priceProduct=BasketProductRecord.querySelector('.data-table__price');

  totalPrice =valueProduct.value*priceProduct.innerText+totalPrice;
}
document.querySelector('.fulBuy__totalPrice').innerText=totalPrice;
}

//deleteRowBasketBuy
var iconDeleteList=document.querySelectorAll(".fa-eraser");
for (var iconDelete of iconDeleteList)
{
    var iconDeleteLink=iconDelete.closest('a');
    iconDeleteLink.addEventListener('click',deleteRowBasketBuy_function);
}
function  deleteRowBasketBuy_function(e) {
  e.preventDefault();
  fetch(this.href)
  .then(
            function(response){
                return response.text();
            }
        )
  .then(
    function(data)
    {
      if(data === "deleteRowBasketBuy")
      {
        location.reload();
      }
    }
  )
  .catch(
    function(error) {
      alert(error);
    }
  )
}