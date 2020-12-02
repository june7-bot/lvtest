<style type="text/css">

    *        { margin:0; padding: 0; }

    
    body{
    
             font-family: "맑은 고딕";
    
             font-size: 0.75em;
    
             color: #333;
    
    }
    
    
    #register-form{
    
             width:200px;
    
             margin:100px auto;
    
             border: 1px solid gray;
    
             border-radius: 5px;
    
             padding: 15px;
    
    }
    
    
    #register-form input, #register-form label{
    
             display:block;
    
    }
    
    
    #register-form label{
    
             margin-top: 10px;
    
    }
    
    
    
    #register-form input{
    
             margin-top: 5px;
    
    }
    

    
    #register-form input[type='image']{
    
             margin: 10px auto;
    
    }
    
    </style>
    
    <body>
    
             <form id="register-form" method="post" action="/register" >
    
                      <label class="legend">HP</label>
                        @csrf
                      <input name="phonenumber" type="text">

                      <label class="legend">PW</label> 
    
                      <input name="password" type="password"> 
    
                      <input type="submit"  value="회원가입">
 
             </form>
    
    </body>