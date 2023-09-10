// const container = document.querySelector('.container');

// const URL = 'https://dog.ceo/api/breeds/image/random'

// // get the images

// function loadImages(numImages = 50){
//    let i=0;
//     while(i < numImages){
//     fetch('https://dog.ceo/api/breeds/image/random')
//     .then(response=>response.json())
//     .then(data=>{
//     // console.log(data.message)
//     const img =  document.createElement('img');
//     img.src = `${data.message}`
//     container.appendChild(img)
//     })
//     i++;
//     }   
//     }

    

// loadImages();


// window.addEventListener('scroll',()=>{
//   console.log(window.scrollY) //scrolled from top
//   console.log(window.innerHeight) //visible part of screen
//   if(window.scrollY + window.innerHeight >= 
//   document.documentElement.scrollHeight){
//   loadImages();
//   }
// })