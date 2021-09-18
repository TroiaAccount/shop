<div class="history__nav-wrapper">
    <div class="history__nav">
        <span id="allmsg" class="history__nav-toggler me-2" onclick="Select(1)">Все сообщения</span>
        <span id="unread" class="history__nav-toggler _active" onclick="Select(2)">Не прочитанное({{$table['count']}})</span>
    </div>
</div>

<div class="history__readAll-btn">
    <form id="Listen">
        @csrf
        <button class="btn btn-success hs"><i class="fas fa-cog me-2"></i>Установить всё как прочитанное</button>
    </form>
</div>

<div class="history__messages-wrapper" id="table">
    @foreach($table['list'] as $result)
        <div class="history__message border text-secondary mb-3">
            <div class="message-title">
                <p>{{$result->title}}</p>
            </div>
            <div class="message-info d-flex justify-content-start mt-3">
                <div class="message__info-item">
                    <p class="border-right">{{$result->created_at}}</p>
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
                    <p>{{$result->from_}}</p>
                </div>
            </div>
            <div class="message-body mt-2">
                <p>{{$result->text}}</p>
            </div>
        </div>
    @endforeach
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
    
    $("#Listen").on("submit", function(e){
       e.preventDefault();
       $.ajax({
             url: '{{Route("AllListen")}}',
             method: 'post',
             dataType: 'json',
             data: $(this).serialize(),
             success: function(data){
                location.reload();
             }
       });
    });

    function Select(type){
        let token = document.getElementsByName('_token')[0].value;
        $.ajax({
            url: '{{Route("Select")}}',
            method: 'post',
            dataType: 'json',
            data: 'type=' + type + '&_token=' + token,
            success: function(data){
                if(data.status == true){
                    let table = document.getElementById('table');
                    table.innerHTML = "";
                    data.data.forEach((element) => {
                        table.innerHTML += '<div class="history__message border text-secondary mb-3">    <div class="message-title">        <p>' + element.title + '</p>    </div>    <div class="message-info d-flex justify-content-start mt-3">        <div class="message__info-item">            <p class="border-right">' + element.created_at + '</p>        </div>        <div class="message__info-item">            <p class="border-right">|</p>        </div>        <div class="message__info-item">            <p>Системное сообщение</p>        </div>        <div class="message__info-item">            <p class="border-right">|</p>        </div>        <div class="message__info-item">            <p>' + element.from_ + '</p>        </div>    </div>    <div class="message-body mt-2">        <p>' + element.text + '</p>    </div></div>';
                    });
                } else {
                    alert(data.error);
                }
            }      
        });
    }
</script>