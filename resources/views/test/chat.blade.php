<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="{{ asset('img/icon/icon.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fitur Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    .chatSection{
        max-width: 1100px;
        margin: auto;
        text-align: center;
        padding: 0 1rem;
    }

    .chatBar{
        font-size: 3rem;
        margin-bottom: 2rem;
    }
    .chatKlik{
        font-size: 2rem;
    }
    .chat-btn{
        position: fixed;
        right: 50px;
        bottom: 50px;
        background: dodgerblue;
        color : white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        opacity: 0.8;
        transition: opacity 0.3s;
        box-shadow: 0 5px 5px rgba(0,0,0,0.4);
    }
    .chat-btn:hover, .submit:hover, #emoji-btn:hover{
        opacity: 1;
    }
    #bt{
        border: none;
        outline: none;
        cursor: pointer;
    }
    .chat-popup{
        display: none;
        position: fixed;
        bottom: 80px;
        right :120px;
        height: 400px;
        width: 300px;
        background-color: white;
        flex-direction: column;
        justify-content: space-between;
        padding: 0.75rem;
        box-shadow: 5px 5px 5px rgba(0,0,0,0.4);
        border-radius: 10px;
    }

    .show{
        display: flex;
    }

    .chat-area{
        height: 80%;
        overflow-y: auto;
        overflow-x: hidden; 
    }

    .income-msg{
        display: flex;
        align-items: center;
    }

    .avatar{
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }

    .income-msg .msg{
        background-color: dodgerblue;
        color: white;
        padding: 0.5rem;
        border-radius: 25px;
        margin-left: 1rem;
        box-shadow: 0 2px 5px rgba(0,0,0,0.4);
    }

    .badge{
        position: absolute;
        width: 30px;
        height: 30px;
        background-color: red;
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        top: -10px;
        right: -10px;
    }

    .input-area{
        position: relative;
        display: flex;
        justify-content: center;
    }

    .submit{
        padding: 0.25rem 0.5rem;
        margin-left: 0.5rem;
        background-color: green;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        opacity: 0.7;
    }

    .chatSection{
        text-align: left;
    }
    
</style>
<body style="background: grey">
    <section class="chatSection">
        <h1 class="chatBar">Chat Pop Up</h1>
        <p class="chatKlik">Click on the chat button to start chatting</p>

        <button id="bt" class="chat-btn">
            <i class="material-icons">comment</i>
        </button>

        <div class="chat-popup">
            <div class="badge">1</div>
            <div class="chat-area">
                <div class="income-msg">
                    <img class="avatar" width="400" src="{{ asset('img/barang/default.png') }}">
                    <span class="msg">Hi, How can I help you?</span>
                </div>
            </div>

            <div class="input-area">
                <input style="width: 100%; border: 1px solid #ccc; font-size: 1rem; border-radius: 5px; height: 2.2rem;" type="text" id="emoji-area" class="emoji-lebar" name=""/>
                <button id="bt" class="btn submit"><i class="material-icons">send</i></button>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <script>
        $("#emoji-area").emojioneArea({
            pickerPosition:"top"
        });

        const popup = document.querySelector('.chat-popup');
        const chatBtn = document.querySelector('.chat-btn');
        const submitBtn = document.querySelector('.submit');
        const chatArea = document.querySelector('.chat-area');


        chatBtn.addEventListener('click', ()=>{
            popup.classList.toggle('show');
        })
    </script>
</body>
</html>