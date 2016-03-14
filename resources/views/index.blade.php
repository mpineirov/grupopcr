<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Grupo PCR - GRUPO PCR
</title>
  <link rel="stylesheet" type="text/css" href="/assets/Semantic/semantic.css">
  <link rel="stylesheet" type="text/css" href="/assets/sweetalert/sweetalert.css">
  <style type="text/css">
  body, .pusher{
    background-color: #fafafa !important;
    background-image: -webkit-radial-gradient(50% 50%, circle, #f5f5f5, #e1e1e1) !important;
    background-image: radial-gradient( circle at 50% 50%, #f5f5f5, #e1e1e1) !important;
    padding-top: 0 !important;
  }
  .menu_home{
    color: #fff !important;
    padding: 0.5em;
    cursor: pointer;
    text-align: center;
  }
  .menu_home:hover{
   opacity: 0.8;
  }
  .menured{
    background-color: #FB5151;
  }
  .menublue{
    background-color: #346E9A !important;
  }
  .menugray{
    background-color: #676D71 !important;
  }
  .white_content{
    color: #fff !important;
  }
  .menupink{
    background-color: #E63F5E !important;
  }
  .menuyelllow{
    background-color: #D0953C !important;
  }
   .footer.segment {
      padding: 2.5em 0em;
    }
  .group_buttons{
    margin-top: 1.25em;
  }
  .required_fields{
    color: red;
    margin-bottom: 1.25em;
  }
  </style>
  
  <script src="/assets/library/jquery.min.js" type="text/javascript" type="text/javascript"></script>
  <script src="/assets/js/semantic.js" type="text/javascript"></script>
  <script  src="/assets/js/sweetalert.min.js" type="text/javascript"></script>
    
  <script type="text/javascript">
  $(document).on('ready',function(){
    // show dropdown on hover
      $('.main.menu  .ui.dropdown').dropdown({
        on: 'hover'
      });
      $("#menu").on('click',function(){
        $('.ui.sidebar').sidebar('toggle');
      });
    });
      
  </script>

</head>
<body>
  <div class="ui inverted  labeled icon left inline vertical sidebar menu">
  <a class="item">
    <i class="home icon"></i>
    Home
  </a>
  <a class="item">
    <i class="inverted marker icon"></i>
    Espacios
  </a>
  <a class="item">
    <i class="inverted users icon"></i>
    Usuarios
  </a>
  <a class="item">
    <i class="inverted bar chart icon"></i>
    Reportes
  </a>
  <a class="item">
    <i class="inverted warning sign icon"></i>
    Tickets
  </a>
</div>
    <div class="pusher">
    <div class="ui stackable borderless main menu">
  <div class="ui text container" >
      <a class="item" id="menu">
  <i class="sidebar icon"></i>
  <span >Menu</span>
</a>
    <div href="#" class="header item">
      Grupo PCR

    </div>
    
  </div>

</div>      <div class="ui padded container segment">
    <h2 class="ui header">Bienvenido</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <br/><br/>

 
<br/>

    <div class="ui three column stackable grid">
      <a href="/admin/tickets/" class="column menu_home yellow">
        <h2 class="ui icon header ">
          <i class="inverted warning sign icon"></i>
          <div class="content white_content">
            Tickets
            <div class="sub header white_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
          </div>
        </h2>
      </a>
        
        <a href="/admin/calendar/" class="column menu_home menublue">

            <h2 class="ui icon header ">
              <i class="inverted calendar icon"></i>
              <div class="content white_content">
                Calendario
                <div class="sub header white_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
              </div>
            </h2>
        </a>
        <a href="/admin/espacios/" class="column menu_home menugray">

            <h2 class="ui icon header ">
              <i class="inverted marker icon"></i>
              <div class="content white_content">
                Espacios
                <div class="sub header white_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
              </div>
            </h2>
        </a>
        
      </div>

       <div class="ui three column stackable grid">
        <a  href="/admin/usuarios/" class="column menu_home menured">

            <h2 class="ui icon header ">
              <i class="inverted users icon"></i>
              <div class="content white_content">
                Usuarios
                <div class="sub header white_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
              </div>
            </h2>
        </a>
        <a  href="/admin/reportes/" class="column menu_home menupink">
            <h2 class="ui icon header">
              <i class="inverted bar chart icon"></i>
              <div class="content white_content">
                Reportes
                <div class="sub header white_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
              </div>
            </h2>
        </a>
       
        
      </div>
    
      <br/><br/><br/>
  </div>

    </div>
    
  


</body>

</html>