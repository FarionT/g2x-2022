window.addEventListener('resize', () => {
    if (window.innerWidth <= 600) {
        $('#competitions').hide();
        $('#webinar').hide();
        $('#game-entries-2').hide();
    }
});

window.addEventListener('resize', () => {
  if (window.innerWidth > 600) {
      $('#competitions').show();
      $('#webinar').show();
      $('#game-entries-2').show();
  }
});

var counter = 1;

$('#gantiKiriShows').click(function(){
    if(counter == 2) {
      counter = 1;
      $('#competitions').hide();
      $('#games').show();
    }
    else if(counter == 3) {
      counter = 2;
      $('#webinar').hide();
      $('#competitions').show();
    }
});

$('#gantiKananShows').click(function(){
    if(counter == 1) {
      counter = 2;
      $('#games').hide();
      $('#competitions').show();
    }
    else if(counter == 2) {
      counter = 3;
      $('#competitions').hide();
      $('#webinar').show();
    } 
});