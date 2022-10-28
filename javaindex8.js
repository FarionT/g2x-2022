if(window.innerWidth <= 1400) {
    let sliderContainer = document.querySelector('.game-entries-div');
    let innerSlider = document.querySelector('.game-entries-1');

    let pressed = false;
    let startX;
    let x;

    sliderContainer.addEventListener("mousedown", (e) => {
        pressed = true;
        startX = e.offsetX - innerSlider.offsetLeft;
        sliderContainer.style.cursor = "grabbing";
    });

    sliderContainer.addEventListener("mouseenter", () => {
        sliderContainer.style.cursor = "grab";
    });
        
    sliderContainer.addEventListener("mouseup", () => {
        sliderContainer.style.cursor = "grab";
        pressed = false;
    });

    sliderContainer.addEventListener("mousemove", (e) => {
        if (!pressed) return;
        e.preventDefault();
    
        x = e.offsetX;
        
        innerSlider.style.left = `${x - startX}px`;
    });

    sliderContainer.addEventListener("mousemove", (e) => {
        checkBoundary();
    });

    // MOBILE

    sliderContainer.addEventListener("touchstart", (e) => {
        pressed = true;
        startX = e.touches[0].screenX - innerSlider.offsetLeft;
    });
        
    sliderContainer.addEventListener("touchend", () => {
        pressed = false;
    });

    sliderContainer.addEventListener("touchmove", (e) => {
        if (!pressed) return;
        e.preventDefault();
    
        x = e.touches[0].screenX;

        innerSlider.style.left = `${x - startX}px`;
    });

    sliderContainer.addEventListener("touchmove", (e) => {
        checkBoundary();
    });

    const checkBoundary = () => {
        let outer = sliderContainer.getBoundingClientRect();
        let inner = innerSlider.getBoundingClientRect();
    
        if (parseInt(innerSlider.style.left) > 0) {
            innerSlider.style.left = "0px";
        }
        if (inner.right < outer.right) {
            innerSlider.style.left = `-${inner.width - outer.width}px`;
        }
    };
}
else {
    var left1 = 1;
    var left2 = 6;
    var right1 = 3;
    var right2 = 8;
    
    var maxleft1 = 1;
    var maxleft2 = 6;
    var maxright1 = 5;
    var maxright2 = -1;
    $('#button-arrow-left').click(function() {
        if(right1 == maxright1 && right2 != maxright2 && left1 != 1 && left2 != 6) {
            left1--;
            left2--;
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5";
            document.getElementById("game-entries-box-" + right1).className = "game-entries-box mb-5 outside";
            right1--;
            right2--; 
        }
        else if(left1 != 1 && left2 != 6) {
            left1--;
            left2--;
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5";
            document.getElementById("game-entries-box-" + right1).className = "game-entries-box mb-5 outside";
            document.getElementById("game-entries-box-" + right2).className = "game-entries-box mb-5 outside";
            right1--;
            right2--;
        }
    });

    $('#button-arrow-right').click(function() {
        if(right1 + 1 == maxright1 && right2 + 1 != maxright2 && right1 != 5 && right2 != 10) {
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5 outside";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5 outside";
            left1++;
            left2++;
            right1++;
            right2++;
            document.getElementById("game-entries-box-" + right1).className = "game-entries-box mb-5";
        }
        else if(right1 != 5 && right2 != 10) {
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5 outside";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5 outside";
            left1++;
            left2++;
            right1++;
            right2++;
            document.getElementById("game-entries-box-" + right1).className = "game-entries-box mb-5";
            document.getElementById("game-entries-box-" + right2).className = "game-entries-box mb-5";
        }
    });
}