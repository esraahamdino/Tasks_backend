<?php

if($_POST){
    $consum=$_POST['consum'];
    if ($consum<0){
        $message = "<div class='alert alert-danger text-center'>
        <h6>please enter valid consum</h6>
        </div>";
    }
    else{
        if($consum>=0 && $consum<=50){
            $unit=0.5;
        }
        elseif($consum<=150){
            $unit=0.75;
        }
        elseif($consum<=250){
            $unit=1.2;
        }
        else{
            $unit=1.5;
        }
        $price=$consum*$unit;
        define("tax",.2);
        $tax=tax*$price;
        $total=$price+$tax;
        $message="<div class='alert alert-danger'>
            <ul>
                <li> consum:  $consum KW </li>
                <li> unit:  $unit  </li>
                <li> Price:  $price EGP </li>
                <li> Tax: 20 % </li>
                <li> Tax value: $tax EGP </li>
                <li> Total Price: = $total EGP </li>
            </ul>
        </div>";
    }


}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>elec</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row ">
              <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                  calculate total electricity!
              </div>
              <div class="col-4 offset-4 mt-5">
                    <form action="" method="post">
                        <div class="form-group">
                          <input type="number" name="consum" id="ID" class="form-control" placeholder="Enter the value" aria-describedby="helpId">
                        </div>
                        <?php  if(isset($message)){
                            echo $message;
                        } ?>
                        <div class="form-group">
                           <button class="btn btn-outline-primary">show result </button>
                        </div>
                    </form>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>