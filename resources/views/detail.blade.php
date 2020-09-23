<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Testing WEB</title>
    <style>
        body{
            background: #eee;
        }
        span{
            font-size:15px;
        }
        a{
          text-decoration:none; 
          color: #0062cc;
          border-bottom:2px solid #0062cc;
        }
        .box{
            padding:60px 0px;
        }
        
        .box-part{
            background:#FFF;
            border-radius:0;
            padding:60px 10px;
            margin:30px 0px;
        }
        .text{
            margin:20px 0px;
        }
        
        .fa{
             color:#4183D7;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="col-12">
        <div class="card" style="margin-top:20px !important; ">
          <div class="card-header">
            {{--  Featured  --}}
          </div>
          <div class="card-body">
            <form method="POST" action="{{ url('detail/'.$items->iditems) }}">
              @csrf
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                  <input type="text" readonly class="form-control-plaintext" name="name" id="name" value="{{ $items->name }}">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-4">
                  <input type="text" readonly class="form-control-plaintext" name="stock" id="stock" value="{{ $items->stock }} ">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-4">
                  <input type="text" readonly class="form-control-plaintext" name="price" id="price" value="{{ $items->harga}} ">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Order</label>
                <div class="col-sm-4">
                  <input type="number" class="form-control"  onkeyup="change_money()" name="order" id="order" value="0">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Money</label>
                <div class="col-sm-4">
                  <input type="number" class="form-control" onkeyup="change_money()" name="money" id="money" value="0">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Change</label>
                <div class="col-sm-4">
                  <input type="number" readonly class="form-control-plaintext" name="change" id="change" value="0">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4">
                  <button type="button" id="btn-save" class="btn btn-primary" onclick="btn_validation()">Submit</button>
                  <button type="submit" id="btn-save-all" class="btn btn-primary" ></button>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<script>
  $('#btn-save-all').hide();

  function change_money(){
    var price = $('#price').val();
    var order = $('#order').val();
    var mon = $('#money').val();

    var result = parseInt(price) * parseInt( order);
    var change = parseInt(mon) - parseInt(result);
    $('#change').val(parseInt(change))

  }

  function btn_validation(){

    var order = $('#order').val();
    var stok = $('#stock').val();
    //check stock
    if(order == 0 ){
      alert('please fill order');
      return false;
    }

    if(parseInt(order) > parseInt(stok)){
      alert('Stock is not enough');
      return false;
    }
    //check money fractions
    var mon = $('#money').val();
    if(mon == 0){
      alert('please fill money');
      return false;
    }
    if(parseInt(mon) == 2000 || parseInt(mon) == 5000 || parseInt(mon) == 10000 || parseInt(mon) == 20000 || parseInt(mon) == 50000){
      console.log('ok')
    }else{
      alert('Money with fractions 2000, 5000, 10000,20000, 50000');
      return false;
    }

    
    var price = parseInt($('#price').val());
    var result = order * price;
      //cheking money
    if(parseInt(result) > parseInt(mon) ){
      alert('Your money is not enough');
      return false;
    }else{
      //return change money
      var change = parseInt(mon) - parseInt(result);
       $('#change').val(parseInt(change))
       setTimeout(function(){
         $('#btn-save-all').trigger('click');
       },5000);
    }
  }


</script>