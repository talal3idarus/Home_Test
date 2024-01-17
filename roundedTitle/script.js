const words = "TalalAidarus"
const TIME = 4000;

const characters = words
    .split("")
    .forEach((char,i) => {
        function createElement(offset){
        const div = document.createElement("div");
        div.innerText = char;
        div.classList.add("character");
        div.style.animationDelay=`${i*(TIME / 16) - offset}ms`;
        return div;
        }
        document.getElementById("spiral").append(createElement(0));
        // document.getElementById("spiral2").append(createElement(-1*(TIME / 4)));
        document.getElementById("spiral3").append(createElement(-1*(TIME / 2)));
    })