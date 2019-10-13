<style>
    .container{
        display:block;
        height: 100vh;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: sans-serif;
        font-size: 24px;
        }
    h3, p{
        margin:10px;
    }
</style>


<div class="container">
<h3>Data Berhasil di Input</h3>
<p>Nama Konsumen: {{$customer->name}}</p>
<p>Email Konsumen: {{$customer->email}}</p>
<p>Pekerjaan Konsumen: {{$customer->occupation}}</p>
</div>