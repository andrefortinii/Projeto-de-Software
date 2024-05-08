<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@500&family=Poetsen+One&display=swap" rel="stylesheet">
</head>
<style>
    body{
        background-color: #ffd1e3; 
    }
    form{
        display:flex;
        justify-content: center;
        align-items: center;
        height: 100px;
        flex-direction: column;
    }
    #login{
        text-align: center;
      font-family:"Poetsen One", sans-serif;
        font-size: 5rem;
        font-style: normal;
    }
    label{
        display:block;
        font-family: "Poetsen One" , sans-serif;
        font-size: 2rem;
    }
    #emial{
        display: inline-block;
    }
    #btnlogar{
      font-family: "Poetsen One" , sans-serif;
      font-size: 1.3em;
      height: 50px;
      width: 100px;
      border-radius: 10px;
      background-color: #a0deff;
      border:none;
    }
   #btncadastro {
    font-family: "Poetsen One" , sans-serif;
      font-size: 1em;
      border:none;
     position: absolute;
     margin-left: 600px;
     margin-top: 70px;
     width: 150px;
     background-color: transparent;
   }
  #btncadastro a{
    text-decoration:none;
    color: black;
   }
   #crie{
    text-align: center;
      font-family:"Poetsen One", sans-serif;
        font-size: 3.5rem;
        font-style: normal;
   }
   #formCadastro{
         display: flex;
         width: 50%;
         height: 500px;
         flex-direction: column;
         align-content: baseline;
         margin: 0 auto;
   }
   #formCadastro input{
    width: 300px;
    height: 25px;
   }
</style>
<body>
    
<main>
        @yield('conteudo')
    </main>
    <script>
        document.getElementById('CPF').addEventListener('input', function(e) {
  var value = e.target.value;
  var cpfPattern = value.replace(/\D/g, '') 
						.replace(/(\d{3})(\d)/, '$1.$2') 
						.replace(/(\d{3})(\d)/, '$1.$2') 
						.replace(/(\d{3})(\d)/, '$1-$2') 
						.replace(/(-\d{2})\d+?$/, '$1'); 
  e.target.value = cpfPattern;
});
    </script>
</body>
</html>
