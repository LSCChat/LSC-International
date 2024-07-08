<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">

    <style>
        *{
            margin:0;
            padding:0;
            font-family:"poppins",sans-serif;
        }
        .wrapper{
  max-width: 500px;
  width: 100%;
  background: #fff;
  margin: 50px auto;
  box-shadow: 0px 0px 3px gray;
  padding: 30px;
  border-radius:10px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #D20062;
  text-transform: uppercase;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #fec107;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.wrapper .form .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #fec107;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #fec107;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}

.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #D20062;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: #E6337A;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}
    </style>
</head>
<body>
<div class="wrapper">
  
    <div class="title">
     User Registration 
    </div>
    <form action="{{route('register.store')}}" method="post">
    <div class="form" >
       <div class="inputfield">
          <label>User Name</label>
          <input type="text" class="input" name="username">
       </div>  
        <div class="inputfield">
          <label> Mobile</label>
          <input type="text" class="input" name="mobile">
       </div>  
       <div class="inputfield">
          <label>  Email </label>
          <input type="text" class="input" name="email">
       </div> 
       
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password">
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input" name="password_confirmation">
       </div> 
       
        <!-- <div class="inputfield">
          <label>Role</label>
          <div class="custom_select">
            <select name="role">
              <option value="">Select</option>
              <option value="super admin">Super admin</option>
              <option value="admin">Admin</option>
              <option value="">Admin</option>
            </select>
          </div>
       </div>  -->
       
      <!-- <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="">
       </div>  -->
     
      
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
    @csrf
    </form>
</div>
</body>
</html>