<h1>Hello Laravel</h1>

<x-message-banner msg="Login Successfully" class="success"/>
<br>
<x-message-banner msg="Unable To Login" class="error"/>
<br>
<x-message-banner msg="Login Successfully" class="success"/>


<style>
    .success{
        background : lightgreen;
        color: green;
        padding: 3px 10px;
    }

    .error{
        background : red;
        color: black;
        padding: 3px 10px;
    }
</style>