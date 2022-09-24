//animación de letras wave
const textPath = document.querySelector('#text-path');

const textContainer = document.querySelector('#text-container');

const path = document.querySelector( textPath.getAttribute('href') );

const pathLength = path.getTotalLength();

const textLength = textPath.getComputedTextLength();

function updateTextPathOffset(offset){
  textPath.setAttribute('startOffset', offset); 
}

function update() {
   const curr =  textPath.getAttribute('startOffset'); 
  if(+curr <= -textLength / 2){
    updateTextPathOffset(0);
  } else {
    
  updateTextPathOffset(+curr - 1);
  }
  
  requestAnimationFrame(update);
}

window.requestAnimationFrame(update);

