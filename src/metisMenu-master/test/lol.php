<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>metisMenu</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">

  <link rel="stylesheet" href="metisMenu.min.css">
  <link rel="stylesheet" href="demo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/themes/prism.min.css">
</head>

<body>
  <div class="clearfix">
    <aside class="sidebar">
      <nav class="sidebar-nav">
        <ul class="metismenu" id="menu">
          <li class="active">
            <a href="#" aria-expanded="true">
              <span class="sidebar-nav-item-icon fa fa-github fa-lg"></span>
              <span class="sidebar-nav-item">metisMenu</span>
              <span class="fa arrow"></span>
            </a>
            <ul aria-expanded="true">
              <li>
                <a href="https://github.com/onokumus/metisMenu">
                  <span class="sidebar-nav-item-icon fa fa-code-fork"></span>
                  Fork
                </a>
              </li>
              <li>
                <a href="https://github.com/onokumus/metisMenu">
                  <span class="sidebar-nav-item-icon fa fa-star"></span>
                  Star
                </a>
              </li>
              <li>
                <a href="https://github.com/onokumus/metisMenu/issues">
                  <span class="sidebar-nav-item-icon fa fa-exclamation-triangle"></span>
                  Issues
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" aria-expanded="false">Menu 0 <span class="fa arrow"></span></a>
            <ul aria-expanded="false">
              <li><a href="#">item 0.1</a></li>
              <li><a href="#">item 0.2</a></li>
              <li><a href="#">item 0.4</a></li>
            </ul>
          </li>
          <li>
            <a href="#" aria-expanded="false">Menu 1 <span class="glyphicon arrow"></span></a>
            <ul aria-expanded="false">
              <li><a href="#">item 1.1</a></li>
              <li><a href="#">item 1.2</a></li>
              <li>
                <a href="#" aria-expanded="false">Menu 1.3 <span class="fa plus-times"></span></a>
                <ul aria-expanded="false">
                  <li><a href="#">item 1.3.1</a></li>
                  <li><a href="#">item 1.3.2</a></li>
                  <li><a href="#">item 1.3.3</a></li>
                  <li><a href="#">item 1.3.4</a></li>
                </ul>
              </li>
              <li><a href="#">item 1.4</a></li>
              <li>
                <a href="#" aria-expanded="false">Menu 1.5 <span class="fa plus-minus"></span></a>
                <ul aria-expanded="false">
                  <li><a href="#">item 1.5.1</a></li>
                  <li><a href="#">item 1.5.2</a></li>
                  <li><a href="#">item 1.5.3</a></li>
                  <li><a href="#">item 1.5.4</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" aria-expanded="false">Menu 2 <span class="glyphicon arrow"></span></a>
            <ul aria-expanded="false">
              <li><a href="#">item 2.1</a></li>
              <li><a href="#">item 2.2</a></li>
              <li><a href="#">item 2.3</a></li>
              <li><a href="#">item 2.4</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>
</div>


         

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="metisMenu.min.js"></script>

  <script>
    $(function() {
      $('#menu').metisMenu();
    });
  </script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/prism.min.js"></script>
</body>

</html>
