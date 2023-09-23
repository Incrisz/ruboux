console.log("test")
// JavaScript

// Get all of the slider images
const sliderImages = document.querySelectorAll('.slider_1');

// Set the current slide index
let currentSlideIndex = 0;

// Start a timer to automatically change slides
setInterval(() => {
  // Increment the current slide index
  currentSlideIndex++;

  // If the current slide index is greater than the number of slides, loop back to the first slide
  if (currentSlideIndex > sliderImages.length - 1) {
    currentSlideIndex = 0;
  }

  // Show the current slide and hide all other slides
  sliderImages[currentSlideIndex].style.display = 'block';
  for (const image of sliderImages) {
    if (image !== sliderImages[currentSlideIndex]) {
      image.style.display = 'none';
    }
  }
}, 4000); // Change the slide every 3 seconds


  // Get all of the slider images
  
  const sliderImages2 = document.querySelectorAll('.slider img');

  // Set the current slide index
  let currentSlideIndexs = 0;

  setInterval(() => {

  // Increment the current slide index
  currentSlideIndexs++;

  // If the current slide index is greater than the number of slides, loop back to the first slide
  if (currentSlideIndexs > sliderImages2.length - 1) {
    currentSlideIndexs = 0;
  }

  // Show the current slide and hide all other slides
  sliderImages2[currentSlideIndexs].style.display = 'block';
  for (const image of sliderImages2) {
    if (image !== sliderImages2[currentSlideIndexs]) {
      image.style.display = 'none';
    }
  }
  }

// Change the slide every 3 seconds
, 4000);
