

function DarkModeSwitch() {
    var darkButton = document.getElementById("myonoffswitch");

    if (darkButton.checked === true) {
        var lightClass = document.getElementsByClassName("lightM");
        for (var i = 0; i < lightClass.length; i + 2) {
            lightClass[i].className = lightClass[i].className.replace("lightM", "darkM");
            console.log("sötét mód be.");
        }
        addStyle();
        function addStyle(styleString) {
            const style = document.createElement('style');
            style.textContent = styleString;
            document.head.append(style);
        }

        addStyle(`
        svg path {
            stroke: white;
        }
        `);
    }

    if (darkButton.checked === false) {
        var darkClass = document.getElementsByClassName("darkM");
        for (var i = 0; i < darkClass.length; i + 2) {
            darkClass[i].className = darkClass[i].className.replace("darkM", "lightM");
            console.log("sötét mód ki.");
        }
        addStyle();
        function addStyle(styleString) {
            const style = document.createElement('style');
            style.textContent = styleString;
            document.head.append(style);
        }
        addStyle(`
        svg path {
            stroke: black;
        }
        `);
    }
}