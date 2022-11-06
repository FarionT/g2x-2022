if(window.innerWidth <= 768) {
    let sliderContainer = document.querySelector('.game-entries-mobile-div');
    let innerSlider = document.querySelector('.game-entries-mobile-1');

    let pressed = false;
    let moved;
    let startX;
    let x;

    sliderContainer.addEventListener("mousedown", (e) => {
        pressed = true;
        moved = false;
        startX = e.offsetX - innerSlider.offsetLeft;
        sliderContainer.style.cursor = "grabbing";
    });

    sliderContainer.addEventListener("mouseenter", () => {
        sliderContainer.style.cursor = "grab";
    });
        
    sliderContainer.addEventListener("mouseup", () => {
        sliderContainer.style.cursor = "grab";
        pressed = false;
        if(pressed == false && moved == false) {
            location.href = "game/";
        }
    });

    sliderContainer.addEventListener("mousemove", (e) => {
        if (!pressed) return;
        moved = true;
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
        moved = false;
        startX = e.touches[0].screenX - innerSlider.offsetLeft;
    });
        
    sliderContainer.addEventListener("touchend", () => {
        pressed = false;
        if(pressed == false && moved == false) {
            location.href = "game/";
        }
    });

    sliderContainer.addEventListener("touchmove", (e) => {
        if (!pressed) return;
        moved = true;
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
    var left2 = 5;
    var right1 = 3;
    var right2 = 7;
    
    var maxleft1 = 1;
    var maxleft2 = 5;
    var maxright1 = 4;
    var maxright2 = 8;
    $('#button-arrow-left').click(function() {
        if(right1 == maxright1 && right2 != maxright2 && left1 != maxleft1 && left2 != maxleft2) {
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5";
            left1--;
            left2--;
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5 ms-0";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5 ms-0";
            document.getElementById("game-entries-box-" + right1).className = "game-entries-box mb-5 outside";
            right1--;
            right2--; 
        }
        else if(left1 != maxleft1 && left2 != maxleft2) {
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5";
            left1--;
            left2--;
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5 ms-0";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5 ms-0";
            document.getElementById("game-entries-box-" + right1).className = "game-entries-box mb-5 outside";
            document.getElementById("game-entries-box-" + right2).className = "game-entries-box mb-5 outside";
            right1--;
            right2--;
        }
    });

    $('#button-arrow-right').click(function() {
        if(right1 + 1 == maxright1 && right2 + 1 != maxright2 && right1 != maxright1 && right2 != maxright2) {
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5 outside";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5 outside";
            left1++;
            left2++;
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5 ms-0";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5 ms-0";
            right1++;
            right2++;
            document.getElementById("game-entries-box-" + right1).className = "game-entries-box mb-5";
        }
        else if(right1 != maxright1 && right2 != maxright2) {
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5 outside";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5 outside";
            left1++;
            left2++;
            document.getElementById("game-entries-box-" + left1).className = "game-entries-box mb-5 ms-0";
            document.getElementById("game-entries-box-" + left2).className = "game-entries-box mb-5 ms-0";
            right1++;
            right2++;
            document.getElementById("game-entries-box-" + right1).className = "game-entries-box mb-5";
            document.getElementById("game-entries-box-" + right2).className = "game-entries-box mb-5";
        }
    });
}