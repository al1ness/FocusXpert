document.addEventListener('DOMContentLoaded', function() {
    const sliderList = document.querySelector('.best-sellers__list');
    const items = document.querySelectorAll('.best-sellers__item');
    const prevButton = document.getElementById('prev-btn');
    const nextButton = document.getElementById('next-btn');
    let currentPosition = 0; // Текущая позиция слайдера
    const visibleItemsCount = 5; // Количество видимых карточек
    const totalItems = items.length; // Общее количество карточек

    const itemWidth = items[0].clientWidth + parseInt(getComputedStyle(sliderList).gap);

    function updateSliderPosition() {
        sliderList.style.transform = `translateX(-${currentPosition * itemWidth}px)`;
    }

    nextButton.addEventListener('click', function() {
        if (currentPosition < totalItems - visibleItemsCount) {
            currentPosition++;
            updateSliderPosition();
        }
    });

    prevButton.addEventListener('click', function() {
        if (currentPosition > 0) {
            currentPosition--;
            updateSliderPosition();
        }
    });

    function updateButtonStates() {
        prevButton.disabled = currentPosition === 0;
        nextButton.disabled = currentPosition >= totalItems - visibleItemsCount;
    }

    updateButtonStates();
    prevButton.addEventListener('click', updateButtonStates);
    nextButton.addEventListener('click', updateButtonStates);
});
