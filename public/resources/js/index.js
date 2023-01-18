const news = !!document.getElementById?.("news")
const volun = !!document.getElementById?.("volunteer")
if(news) document.getElementById("news").style.display = "none";
else if(volun) document.getElementById("volunteer").style.display = "none";
else {}


function changeTab(evt, type){
    let i, tabContent, tabLinks;

    tabLinks = document.getElementsByClassName("cng");
    tabContent = document.getElementsByClassName("tabcont");
    //모든 탭 지우기
    for(i = 0; i < tabContent.length; i++){
        tabContent[i].style.display = "none";
    }

    for(i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace(" active ","");
    }

    document.getElementById(type).style.display = 'block';
    evt.currentTarget.className += " active ";
}
//헤더 컬러
const indexHead = !document.querySelector('.main_area');
const hdrEl = document.getElementById('header');
const logoEl = hdrEl.querySelector('header .logo');
const navEl = document.getElementById('menu');
const listEl = Array.from(document.getElementsByClassName('nav'));
const active = listEl.find(nav => Array.from(nav.classList)[3] === 'active');
let isHeaderChange = false;
function menuClick(className){
    Array.prototype.forEach.call(listEl, nav=>{
        nav.classList.remove('active');
        if(nav.classList.contains(className)){
            nav.classList.add('active');
        }
    })
    returnLine();
}
function returnLine(){
    if(indexHead){
        isHeaderChange = true;
    } else {
        let detectLine = document.querySelector('.main_area').clientHeight - (hdrEl.clientHeight - 50);
        let currentLine = $(window).scrollTop();
        isHeaderChange = detectLine >= currentLine ? false : true;
    }
    //헤더 스타일 변경
    if(isHeaderChange){
        logoEl.classList.add('towhite');
        Array.prototype.forEach.call(listEl, nav => {
            // let navKey = nav.dataset.nav;
            if(nav === active){
                nav.classList.add('navactive')
            } else {
                nav.classList.add('underborder')
                nav.classList.add('towhite')
            }  
        });
    } else {
        logoEl.classList.remove('towhite');
        Array.prototype.forEach.call(listEl, nav => {
            // let navKey = nav.dataset.nav;
            if(nav === active){
                nav.classList.remove('navactive')
            }
            nav.classList.remove('underborder')
            nav.classList.remove('towhite')
        });
    }
    //active 감지
}
window.addEventListener('load', returnLine);
window.addEventListener('scroll', returnLine);