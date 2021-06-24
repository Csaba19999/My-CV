


function DarkModeSwitch() {
    var hatter = document.getElementById("myonoffswitch").checked;

    if (hatter === true) {
        hatter.classList.remove("lightM");
        hatter.classList.add("darkM");
        console.log("Sötét mód bekapcsolva.");
    } else if (hatter === false) {
        hatter.classList.remove("darkM");
        hatter.classList.add("lightM");
        console.log("Sötét mód kikapcsolva.");
    } else {
        console.log("Valami gond van a Dark móddal.");
    }
}