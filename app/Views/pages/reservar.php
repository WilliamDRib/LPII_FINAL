<style>
    /* Bordered form */
    form {
        border: 3px solid #f1f1f1;
    }

    /* Full-width inputs */
    
    input[type=year] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Add a hover effect for buttons */
    button:hover {
        opacity: 0.8;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    /* Avatar image */
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    img.carro{
        width:100%;
        max-width:300px;
    }

    div.carros{
        display: flex;
        flex-wrap: wrap;
        margin:1.4vw;
    }


    /* Add padding to containers */
    .container {
        padding: 16px;
    }
    dd {
        text-align: center;
    }
    
</style>

<form action="/reservar" method="post">

    <div class="container">

        <label for="id"><b>Id do anuncio</b></label>
        <input type="year" placeholder="Enter Id do carro" name="id" required>

        <button type="submit">Reservar</button>
    </div>
</form>