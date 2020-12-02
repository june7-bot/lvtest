<style type="text/css">

    *        { margin:0; padding: 0; }

    
    body{
    
             font-family: "맑은 고딕";
    
             font-size: 0.75em;
    
             color: #333;
    
    }
    
    
    #login-form{
    
             width:200px;
    
             margin:100px auto;
    
             border: 1px solid gray;
    
             border-radius: 5px;
    
             padding: 15px;
    
    }
    
    
    #login-form input, #login-form label{
    
             display:block;
    
    }
    
    
    #login-form label{
    
             margin-top: 10px;
    
    }
    
    
    
    #login-form input{
    
             margin-top: 5px;
    
    }
    

    
    #login-form input[type='image']{
    
             margin: 10px auto;
    
    }
    
    </style>
    


    <body>
    
             <form id="login-form" method="post" action="success">
    
                      <label class="legend">PH</label>
                        @csrf
                      <input name="phonenumber" type="text" value="{{ isset($phonenumber) ? $phonenumber : ''}}">
    
                      <label class="legend">패스워드</label> 
    
                      <input name="password" type="password"> 
    
                      <input type="submit"  value="로그인">
    
             </form>
    
    </body>