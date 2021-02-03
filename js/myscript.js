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

// for (i = 0; i < inputs.length; i++) {
//   inputs[i].addEventListener('click', function(){
//     document.querySelector('body').addEventListener('touchmove', function(e){
//       console.log('me movi')
//       if(!(e.target).classList.contains('step')){
//         e.preventDefault()
//       }
//     })
//   })
// }


/*for (i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('click', function(){

    setTimeout(function(){
      const pared = document.querySelectorAll('.pared');
      for (j=0; j < pared.length; j++) {
        pared[j].classList.remove('step');
      }
      setTimeout(function() {
        const cerrar = document.querySelector('.lg-close');
        cerrar.addEventListener('click', function(){
          const pared = document.querySelectorAll('.pared');
          for (j=0; j < pared.length; j++) {
            pared[j].classList.add('step');
          }
        })
      }, 300)
    }, 300)
  })
}*/

