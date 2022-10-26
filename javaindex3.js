if(window.innerWidth <= 1200) {
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

    sliderContainer.addEventListener("mousemove", (e) => {
        checkBoundary();
    });
}
else {
    var counter = 1;
    $('#button-arrow-left').click(function(){
        if(counter == 2) {

            
            counter--;
        }
    });

    $('#button-arrow-right').click(function(){
        if(counter == 1) {


            counter++;
        }
    });
}