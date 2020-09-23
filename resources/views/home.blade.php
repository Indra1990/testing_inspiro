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
    <div class="box">
        <div class="container">
             <div class="row">
                <div class="col-12">
                    @if(session('status_error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('status_error') }}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @elseif(session('status_success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('status_success') }}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                </div>
              @foreach ($items as $item)       
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
                        <div class="box-part text-center">
                            
                            <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                            
                            <div class="title">
                                <h4>{{ $item->name }}</h4>
                            </div>
                            
                            <div class="text">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="30%"><center>Unit</center></td>
                                            <td>:</td>
                                            <td>{{ $item->unit }}</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><center>Stock</center></td>
                                            <td>:</td>
                                            <td>{{ $item->stock }}</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><center>Price</center></td>
                                            <td>:</td>
                                            <td>{{ number_format( $item->harga,'0','.','.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ url('detail/'.$item->iditems) }}">Buy</a>
                         </div>
                    </div>	 
                    @endforeach
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