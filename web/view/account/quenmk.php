<div class="dangnhap">

    <form action="index.php?act=quenmk" method="post">
    <h3>Lấy lại mật khẩu</h3>
    <div>
      <input type="email" placeholder="  Email" name="email">
    </div>
    
    <!-- <div class="submit">
      <input type="submit" value="Gửi email" name="guiemail">
    </div>
    <div class="submit">
      <input type="submit" value="quay lại trang " name="guiemail">
    </div> -->
    <div class="khac">
          <div class="submit">
            <input type="submit" value="Send Email" name="guiemail">
          </div>
          <div class="reset">
            <a href="index.php?act=login"><input type="button" value="Login" name="login"></a>
          </div>
    </div>
  
  </form>
  <p class="thongbao">
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
    </p>

 


</div>
<style>
    .thongbao{
        color: red;
        font-weight: bold;
    }
  .dangnhap {
    width: 450px;
    margin: auto;
    margin-top: 20px;

  }

  .dangnhap h3 {
    text-align: center;
  }

  .dangnhap input {
    margin-top: 20px;
    margin-left: 20px;
    width: 400px;
    height: 35px;
  }

  .submit input {
    width: 408px;
    margin-left: 20px;
    margin-top: 20px;
    height: 40px;
    background-color: black;
    color: white;
  }

  .submit input:hover {
    background-color: white;
    color: black;
  }

  .dangnhap p {
    margin-left: 20px;
    margin-top: 10px;
  }

  .dangnhap a {
    text-decoration: none;
    color: black;
    font-weight: bold;
   
  }

  .dangnhap a:hover {
    color: red;
    text-decoration: underline;
  }

  .dangnhap h5 {
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;  
    color: red;
  }

  .khac {
    display: grid;
    grid-template-columns: 200px 200px;
  }
  .khac input{
    width: 198px;
    margin-top: 5px;
    background-color: white;
    color: black;
  }
  .khac input:hover{
    background-color: black;
    color: white;
  }
  .khac {
    display: grid;
    grid-template-columns: 200px 200px;
    
  }
  .khac input{
    width: 198px;
    margin-top: 20px;
    height:40px;
    
  }
  .submit input{
    background-color: black;
    color: white;
  }
  .khac input:hover{
    background-color: white;
    color: black;
  }
  
  .reset input{
    background-color: white;
    color: black;
    
  }
  .reset input:hover{
    background-color: black;
    color: white;
  }
  
</style>