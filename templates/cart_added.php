<style>
.modal-overlay {
    display: none;
    position: fixed;
    inset:0;
    background: rgba(0, 0, 0, 0.5);
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

.modal-content {
    background:#fff;
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

.modal-message {
    margin-top: 10px;
    font-size: 1.2em;
    color: #333;
}
</style>
<div class="modal-overlay" id="cartModal">
    <div class="modal-content">
        <span class="modal-checkmark">✔️</span>
        <p class="modal-message">Товар добавлен в корзину!</p>
    </div>
</div>