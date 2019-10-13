<style>
    .container{
        display:flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: sans-serif;
        font-size: 24px;
    }
    .kotak{
        padding:10px;
        border:1px solid black;
        border-radius: 5px;
    }
    label, input{
        margin:10px;
    }
    input{
        width:400px;
        height:45px;
        border: 1px solid #cccccc;
        border-radius: 10px;
    }
    button{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    h3{
        margin:50px;
    }
</style>

<div class="container">
<h3>Edit Customer</h3>
<div class="kotak">
<form class="form" method="post" action="" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label>Nama: </label><br>
        <input type="text" name="name" value="{{$customer->name}}"><br>
        <label>Email: </label><br>
        <input type="text" name="email" value="{{$customer->email}}"><br>
        <label>Pekerjaan: </label><br>
        <input type="text" name="occupation" value="{{$customer->occupation}}"><br>
        <input type="hidden" name='id' value="{{$customer->id}}"> 
    </div>
    <div class="form-group">
        <button type="submit" name="comment" class="btn btn-primary">Update Data Konsumen</button>
    </div>
</form>
</div>
</div>