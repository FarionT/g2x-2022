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
            var box1 = $('#game-entries-box-1').text();
            var box2 = $('#game-entries-box-2').text();
            var box3 = $('#game-entries-box-4').text();
            var box4 = $('#game-entries-box-5').text();
            $("#game-entries-box-1").text("Slide 1");
            $("#game-entries-box-2").text(box1);
            $("#game-entries-box-3").text(box2);
            $("#game-entries-box-4").text("Slide 2");
            $("#game-entries-box-5").text(box3);
            $("#game-entries-box-6").text(box4);
            counter--;
        }
    });

    $('#button-arrow-right').click(function(){
        if(counter == 1) {
            var box1 = $('#game-entries-box-2').text();
            var box2 = $('#game-entries-box-3').text();
            var box3 = $('#game-entries-box-5').text();
            var box4 = $('#game-entries-box-6').text();
            $("#game-entries-box-1").text(box1);
            $("#game-entries-box-2").text(box2);
            $("#game-entries-box-3").text("Slide 7");
            $("#game-entries-box-4").text(box3);
            $("#game-entries-box-5").text(box4);
            $("#game-entries-box-6").text("Slide 8");
            counter++;
        }
    });
}