<div class="history__nav-wrapper">
    <div class="history__nav">
        <span id="allmsg" class="history__nav-toggler me-2">Все сообщения</span>
        <span id="unread" class="history__nav-toggler _active">Не прочитанное(12)</span>
    </div>
</div>

<div class="history__readAll-btn">
    <button class="btn btn-success hs"><i class="fas fa-cog me-2"></i>Установить всё как прочитанное</button>
</div>

<div class="history__messages-wrapper">
    @for($i = 0; $i < 10; $i++)
        <div class="history__message border text-secondary mb-3">
            <div class="message-title">
                <p>Добавление доставки в Россию.</p>
            </div>
            <div class="message-info d-flex justify-content-start mt-3">
                <div class="message__info-item">
                    <p class="border-right">2020-11-24 13:59</p>
                </div>
                <div class="message__info-item">
                    <p class="border-right">|</p>
                </div>
                <div class="message__info-item">
                    <p>Системное сообщение</p>
                </div>
                <div class="message__info-item">
                    <p class="border-right">|</p>
                </div>
                <div class="message__info-item">
                    <p>admirated</p>
                </div>
            </div>
            <div class="message-body mt-2">
                <p>Клиент 8856, здраствуйте! Вам была добавлена доставка в Россю. Вес: 3.5кг. Стоимость: 36 ю/кг общая сумма составляет 126 ю.</p>
            </div>
        </div>
    @endfor
</div>

<script>
    const msgTogglers = document.querySelectorAll('span.history__nav-toggler');

    msgTogglers.forEach(item => {
        item.addEventListener('click', () => {
            if (!item.classList.contains('_active')) {
                item.classList.add('_active');
                $(item).siblings()[0].classList.remove('_active');
            }
        })
    });
</script>