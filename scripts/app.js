document.addEventListener('DOMContentLoaded', function () {
    // Получаем элементы чекбокса и кнопки
    const termsCheckbox = document.getElementById('terms');
    const submitButton = document.getElementById('submit');

    // Обработчик изменения состояния чекбокса
    termsCheckbox.addEventListener('change', function () {
        // Включаем или выключаем кнопку на основе состояния чекбокса
        submitButton.disabled = !this.checked;
    });
});