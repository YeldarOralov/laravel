<div>
    <h2 style="padding: 10px; font-size: 40px; margin: auto">Books</h2>
    <div>
        <a href="/" style="padding: 10px; font-size: medium; text-decoration-line: none; color: cornflowerblue; margin: auto">BACK TO MAIN</a>
    </div>
</div>
<div class="divForm">
    <form action="/book/create" method="POST">
        @csrf
        <label for="name">Name: </label>
        <input name="name" type="text">

        <label for="author">Author: </label>
        <input name="author" type="text">

        <label for="year">Year: </label>
        <input name="year" type="number">

        <label for="rating">Rating: </label>
        <input name="rating" type="number">
        @foreach ($errors->all() as $error)
            <span style="color: red">{{ $error }}</span>
        @endforeach
        <input class="submitButton" type="submit" value="CREATE">
    </form>
</div>
<style>
    .divForm{
        display: flex;
        justify-content: center;

    }
    form{
        display: flex;
        align-items: center;
        flex-direction: column;
        width: 40%;
        box-shadow: 10px 10px 90px 0px rgba(21,145,187,1);
        margin:10px auto;
        max-width: 400px;
        padding: 20px 12px 10px 20px;
        font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        border-radius: 10px;
    }
    label{
        margin:0 0 3px 0;
        padding:0px;
        display:block;
        font-weight: bold;
    }
    input{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border:1px solid #BEBEBE;
        padding: 7px;
        margin:0px;
        outline: none;
    }
    .submitButton{
        margin: 10px;
        background: #4B99AD;
        padding: 8px 15px 8px 15px;
        border: none;
        color: #fff;
    }
</style>
