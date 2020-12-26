<html>

<head>
  
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>
 <style type="text/css">
    
        body {
        background-color: rgba(0,0,0,0.7);
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 20px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        padding-top: 15px;
    }
    
    .submit {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        text-decoration: none
    }
    .valid_msg{
        text-align: center; 
        color: red ;
        display: none
    }
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
   


 </style> 
<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <p  class="valid_msg" id="validation_message">username or password is invalid</p>
    <form class="form1" id="login_form">

      <input class="un" id="name" type="text" align="center" placeholder="Username">
      <input class="pass" id="pass" type="password" align="center" placeholder="Password">
      <button class="submit" align="center"> Sign in </button>   

    </form>  
 <!--      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
             -->                
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
         
        $("#login_form").submit(function(event){
          event.preventDefault();
          let name = $("#name").val()
          let pass = $("#pass").val()

          $.ajax({
            type: "POST",
            url: '../controller/con_login.php',
            dataType: "json",
            data: {name,pass},
            success : function(res){
              if(res.status){
                window.location.href = "index.php";
              }else{
                $("#validation_message").css('display','block')
                setTimeout(() =>{
                  $("#validation_message").css('display','none')
                },3000)
              }
            }
          })
          
        });
      });
    </script>
</body>

</html>