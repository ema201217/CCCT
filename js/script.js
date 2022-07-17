const category = document.querySelector("#categoria");
const amount = document.querySelector("#cantidad");
const btnResume = document.querySelector("#btnResumen");
const btnReset = document.querySelector("#btnReset");
const output = document.querySelector("#output");

if(btnResume){
  btnResume.onclick = () => {
    output.innerHTML = "Total a Pagar: $ ";
  let discountSelected = +category.options[+category.selectedIndex].value;
  let amountTickets = +amount.value;
  const priceTicket = 200;
  const priceNotDiscount = priceTicket * amountTickets;
  const priceWithDiscount =
  priceNotDiscount - (priceNotDiscount * discountSelected) / 100;
  output.innerHTML += priceWithDiscount;
};
}

if(btnReset){
  btnReset.onclick = () => {
    output.innerHTML = "Total a Pagar: $ ";
  };
}

