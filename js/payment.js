(function tabsFunc() { 
    const bankInput1 = document.querySelector("#bank-input1");
    const bankInput2 = document.querySelector("#bank-input2");
    const bank_p1 = document.querySelector("#bank-p1");
    const bank_p2 = document.querySelector("#iyzipay-checkout-form");

    bankInput1.addEventListener("click", () => {
        bank_p1.classList.add("active");
        bank_p2.classList.remove("active");
    });
    bankInput2.addEventListener("click", () => {
        bank_p2.classList.add("active");
        bank_p1.classList.remove("active");
    });
    
})();

(function rememberMi(){
    const rememberMi = document.querySelector("#payment-remember-box");
    let durum = 0, rememberbox = document.querySelector(".payment-remember");

    rememberMi.addEventListener("click", () => {
        if (durum==0){
            rememberbox.style.display = "block";
            durum=1;
          } else {
            rememberbox.style.display = "none";
            durum=0;
          }
    });

})();
