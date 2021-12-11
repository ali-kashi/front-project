let cards=document.querySelectorAll(".card")
for (let card of cards)
{
  card.addEventListener('click',cardurl);
}
function cardurl() {
  let address=this.querySelector(".card-href");
  address=address.value;
  window.location=address;
}
