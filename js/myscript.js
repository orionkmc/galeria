const inputs = document.querySelectorAll('.lightgallery');

for (i = 0; i < inputs.length; i++) {
  lightGallery( inputs[i] );
};

// remover class enabled al body

const img = document.querySelectorAll('.img-responsive');
const body = document.querySelector('body');

for (i = 0; i < img.length; i++) {
  img[i].addEventListener('click', function() {
    body.classList.remove("impress-enabled");
  });
};

// evitar que se desplace el body

for (i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('click', function(){
    document.querySelector('body').addEventListener('touchmove', function(e){
      if(!(e.target).classList.contains('.step')){
        e.preventDefault()
      }
    })
  })
}


/*evaluar();
window.addEventListener('hashchange', function() {
  evaluar();
});

function evaluar(e){
  let a = location.href.split('#/')[1]
  if (a == 'entrada') {
    allBlock();
    setTimeout(() => { 
      allOpacity1()
    }, 100);
  } else if (a == 'pared2') {
    allBlock();
    document.querySelector('#entrada').style.opacity = "0";
    setTimeout(() => { 
      document.querySelector('#entrada').style.display = "none";
    }, 500);
  }
}

function allBlock(){
  let inputs = document.querySelectorAll('.step');
  for (i = 0; i < inputs.length; i++) {
    inputs[i].style.display = "block";
  }
}

function allOpacity1(){
  let inputs = document.querySelectorAll('.step');
  for (i = 0; i < inputs.length; i++) {
    inputs[i].style.opacity = "1";
  }
}
*/
// evaluar();
// window.addEventListener('hashchange', function() {
//   evaluar();
// });

// function evaluar(e){
//   a = location.href.split('#/')[1]
//   if (a == 'entrada') {
//     allBlock();
//     document.querySelector('#pared16').style.display = "none";
//   } else if (a == 'pared2') {
//     allBlock();
//     document.querySelector('#pared5').style.display = "none";
//   } else if (a == 'pared4') {
//     allBlock();
//     document.querySelector('#pared7').style.display = "none";
//     document.querySelector('#pared10').style.display = "none";
//   } else if (a == 'pared5') {
//     allBlock();
//     document.querySelector('#pared2').style.display = "none";
//   } else if (a == 'pared6') {
//     allBlock();
//     document.querySelector('#pared20').style.display = "none";
//   } else if (a == 'pared7') {
//     allBlock();
//     document.querySelector('#pared4').style.display = "none";
//   } else if (a == 'pared8') {
//     allBlock();
//     document.querySelector('#pared19').style.display = "none";
//   } else if (a == 'pared9') {
//     allBlock();
//     document.querySelector('#pared18').style.display = "none";
//   } else if (a == 'pared10') {
//     allBlock();
//     document.querySelector('#pared13').style.display = "none";
//   } else if (a == 'pared11') {
//     allBlock();
//     document.querySelector('#pared17').style.display = "none";
//   } else if (a == 'pared12') {
//     allBlock();
//     document.querySelector('#pared15').style.display = "none";
//   } else if (a == 'pared13') {
//     allBlock();
//     document.querySelector('#pared10').style.display = "none";
//     document.querySelector('#pared7').style.display = "none";
//   } else if (a == 'pared15') {
//     allBlock();
//     document.querySelector('#pared12').style.display = "none";
//   } else if (a == 'pared16') {
//     allBlock();
//     document.querySelector('#entrada').style.display = "none";
//   } else if (a == 'pared17') {
//     allBlock();
//     document.querySelector('#pared11').style.display = "none";
//   } else if (a == 'pared18') {
//     allBlock();
//     document.querySelector('#pared9').style.display = "none";
//   } else if (a == 'pared19') {
//     allBlock();
//     document.querySelector('#pared8').style.display = "none";
//   } else if (a == 'pared20') {
//     allBlock();
//     document.querySelector('#pared6').style.display = "none";
//   } else {
//     allBlock();
//   }
// }

// function allBlock(){
//   inputs = document.querySelectorAll('.step');
//   for (i = 0; i < inputs.length; i++) {
//     inputs[i].style.display = "block";
//   }
// }


// galeria mobile

// function mobile ()  {
//   const a = document.querySelector('#impress');
//     if (window.matchMedia("(max-width: 700px)")){
//       a.style.perspective = "2000px";

//       a.style.transform = "scale(0.851562)";
//     }
// }

// mobile();