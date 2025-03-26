let currentIndex = 0; 

function moveSlide(direction) {
    const items = document.querySelectorAll('.gallery .item');
    const totalItems = items.length;

    
    currentIndex = (currentIndex + direction + totalItems) % totalItems;

    const gallery = document.querySelector('.gallery');
    const offset = -currentIndex * 30; 
    gallery.style.transform = `translateX(${offset}%)`; 
}
