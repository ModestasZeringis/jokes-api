<head>
<style type="text/css">
  body{
    background-color: aliceblue;
  }
  .box-container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .box{
    background:bisque;
    border-radius: 15px;
    box-shadow: 3px 10px 15px #abc;
    display: flex;
    align-items: center;
    text-align: center;
    font-size:30px;
    padding:50px;
    font-family: monospace;
    font-weight: bold;
    position: relative;
  }
  .tag{
    position: absolute;
    top: 0;
    left: 0;
    font-size: 15px;
    background-color: #666;
    color:#fff;
    padding:5px 10px;
  }
</style></head>
<?php
  $api_url = "https://v2.jokeapi.dev/joke/Any";
  $joke = json_decode(file_get_contents($api_url));
?>
<div class="box-container">
  <div class="box">
    <div class="box-content">
      <div class="tag">
        <?php echo $joke->category;?>
      </div>
      <?php if($joke->type=='single'){?>
        <span><?php echo $joke->joke;?></span>
      <?php } else{ ?>
        <span><?php echo $joke->setup;?></span>
        <hr>
        <span><?php echo $joke->delivery;?></span>
      <?php } ?>
    </div>
  </div>
</div>