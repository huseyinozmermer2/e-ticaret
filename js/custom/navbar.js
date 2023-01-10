/* Benim sayfam yüklendiğinde window.addEventListener adında bir olay atayacağım. HTML in DOM içeriği yüklendiğinde benim şuan yazacağım fonksiyonları çalıştır demiş oluyorum
addEventListener() yöntemi, belirtilen olay hedefe her teslim edildiğinde çağrılacak bir işlev ayarlar.

Ortak hedefler Element veya alt öğeleri, Document ve Window'dur, ancak hedef olayları destekleyen herhangi bir nesne olabilir (XMLHttpRequest gibi).
Not: Bu yöntem, bir olay dinleyicisini kaydetmek için önerilen yoldur. Faydaları aşağıdaki gibidir:addEventListener()*/
window.addEventListener("DOMContentLoaded", event => {
    /* ilk olarak navbarMobile adında bir function oluşturuyorum yazıyorum. */
        var navbarMobile=function(){
    /* Burana mainNavbar id li navbarımı buruda çektim ve bir veribıla atadım */
            const nCollapsible=document.body.querySelector("#mainNavbar");
    /* offsetHeight diyerek burada headerin yüksekliğini verıbılımıza çekmiş oluyoruz  
            const myHeaderHeight = document.querySelector("#myHeader").offsetHeight; */
    /* eğer burada herhangi bir mainNavbar bulamıyorsan return et kapat */ 
            if(!nCollapsible){
                return;
            }
    /* eğer window.scrollY ya ekseninde ekran aşağıya çekilmemişse aşağıya kaydırma işlemi yoksa navbar-mobile adındaki classı sil remove et */
            if(window.scrollY === 0){
                nCollapsible.classList.remove("navbar-mobile");
            }else{
    /* eğer ekran aşağıya çekilmişse yani aşağıya kaydırma işlemi yapılmışsa ekle navbar-mobile adındaki classı ekle  */ 
                nCollapsible.classList.add("navbar-mobile");
            }
        };
    /* Oluşturduğum navbarMobile functionumu burada çalıştıracağım */
        navbarMobile();
    /* document yani sayfa addEventListener bir olay ekle. sayfada scroll olayı gerçekleşirse yani sayfa aşağıya kaydırma olayı gerçekleşirse hemen navbarMobile adındaki fonkasiyonu çaığır ve çalıştır diyorum */
        document.addEventListener("scroll",navbarMobile);
        const myNavbar=document.body.querySelector("#mainNavbar");
        if(myNavbar){
            new bootstrap.ScrollSpy(document.body,{
                target:"#mainNavbar",
                offset:74,
            });
        }
       
    });

    var BtnCanvas=document.querySelectorAll(".btn-cole-canvas");
for (let i = 0; i < BtnCanvas.length; i++) {
    BtnCanvas[i].addEventListener("click", function(){
        document.querySelector('[data-bs-dismiss="offcanvas"]').click();
    });
    
}
