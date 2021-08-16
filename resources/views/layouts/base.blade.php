<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style type="text/css">
            html *{
          -webkit-font-smoothing: antialiased;
      }
      h3{
          font-size: 25px !important;
          margin-top: 20px;
          margin-bottom: 10px;
          line-height: 1.4em !important;
      }

      p {
          font-size: 14px;
          margin: 0 0 10px !important;
          font-weight: 300;
      } 

       small {
          font-size: 75%;
          color: #777;
          font-weight: 400;
      }

      .container .title{
          color: #3c4858;
          text-decoration: none;
          margin-top: 30px;
          margin-bottom: 25px;
          min-height: 32px;
      }

      .container .title h3{
          font-size: 25px;
          font-weight: 300;
      }

      div.card {
          border: 0;
          margin-bottom: 30px;
          margin-top: 30px;
          border-radius: 6px;
          color: rgba(0,0,0,.87);
          background: #fff;
          width: 100%;
          box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
      }

      div.card.card-plain {
          background: transparent;
          box-shadow: none;
      }
      div.card .card-header {
          border-radius: 3px;
          padding: 1rem 15px;
          margin-left: 15px;
          margin-right: 15px;
          margin-top: -30px;
          border: 0;
          background: linear-gradient(60deg,#eee,#bdbdbd);
      }

      .card-plain .card-header:not(.card-avatar) {
          margin-left: 0;
          margin-right: 0;
      }

      .div.card .card-body{
          padding: 15px 30px;
      }

      div.card .card-header-primary {
          background: linear-gradient(60deg,#ab47bc,#7b1fa2);
          box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(156,39,176,.6);
      }

      div.card .card-header-danger {
          background: linear-gradient(60deg,#ef5350,#d32f2f);
          box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(244,67,54,.6);
      }


      .card-nav-tabs .card-header {
          margin-top: -30px!important;
      }

      .card .card-header .nav-tabs {
          padding: 0;
      }

      .nav-tabs {
          border: 0;
          border-radius: 3px;
          padding: 0 15px;
      }

      .nav {
          display: flex;
          flex-wrap: wrap;
          padding-left: 0;
          margin-bottom: 0;
          list-style: none;
      }

      .nav-tabs .nav-item {
          margin-bottom: -1px;
      }

      .nav-tabs .nav-item .nav-link.active {
          background-color: hsla(0,0%,100%,.2);
          transition: background-color .3s .2s;
      }

      .nav-tabs .nav-item .nav-link{
          border: 0!important;
          color: #fff!important;
          font-weight: 500;
      }

      .nav-tabs .nav-item .nav-link {
          color: #fff;
          border: 0;
          margin: 0;
          border-radius: 3px;
          line-height: 24px;
          text-transform: uppercase;
          font-size: 12px;
          padding: 10px 15px;
          background-color: transparent;
          transition: background-color .3s 0s;
      }

      .nav-link{
          display: block;
      }

      .nav-tabs .nav-item .material-icons {
          margin: -1px 5px 0 0;
          vertical-align: middle;
      }

      .nav .nav-item {
          position: relative;
      }
      footer{
          margin-top:100px;
          color: #555;
          background: #fff;
          padding: 25px;
          font-weight: 300;
          
      }
      .footer p{
          margin-bottom: 0;
          font-size: 14px;
          margin: 0 0 10px;
          font-weight: 300;
      }
      footer p a{
          color: #555;
          font-weight: 400;
      }

      footer p a:hover {
          color: #9f26aa;
          text-decoration: none;
      }
    </style>

    <title>Thimphu Techpark</title>
  </head>
  <body>
    <div class="card card-nav-tabs">
        <div class="card-header card-header-primary">
            <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#profile" data-toggle="tab">
                                <i class="material-icons">face</i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#messages" data-toggle="tab">
                                <i class="material-icons">chat</i>
                                Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#settings" data-toggle="tab">
                                <i class="material-icons">build</i>
                                Settings
                            </a>

                        </li>
                         <li class="nav-item">
                            <a class="nav-link active" href="#profile" data-toggle="tab">
                                <i class="material-icons">face</i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#messages" data-toggle="tab">
                                <i class="material-icons">chat</i>
                                Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#settings" data-toggle="tab">
                                <i class="material-icons">build</i>
                                Settings
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
   <div class="container-fluid">
      @yield('content')
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('body').bootstrapMaterialDesign();
    
    
});
    </script>

  </body>
</html>