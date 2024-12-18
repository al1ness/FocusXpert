<style>

.modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

.modal-content {
    background: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    max-width: 300px;
    position: relative;
}

.modal-checkmark {
    font-size: 2em;
    color: green;
}

/* Стили для сообщения и кнопок */
.modal-message {
    font-size: 1.2em;
    color: #333;
    margin-bottom: 20px;
}

.modal-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
}

.modal-btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    width: 70px;
}

#confirmClearCartYes {
    background-color: #dc3545;
    color: white;
}

#confirmClearCartNo {
    background-color: #28a745; 
    color: white;
}
</style>
<div class="modal-overlay" id="confirmClearCartModal">
    <div class="modal-content">
        <p class="modal-message">Вы уверены, что хотите очистить корзину?</p>
        <div class="modal-buttons">
            <button id="confirmClearCartYes" class="modal-btn">Да</button>
            <button id="confirmClearCartNo" class="modal-btn">Нет</button>
        </div>
    </div>
</div>