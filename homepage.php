
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SquareKnot.in</title>

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> 
        
    </head>
<style>
div.a {
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
	background:#ff25 ;
}
/*
    DEMO STYLE
*/
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
.success {background-color:#66BB6A;} /* Green Confirmed */
.success:hover {background-color: #A5D6A7;}

.pending {background-color: #FF9800;} /* Blue */
.pending:hover {background: #E65100;}

.warning {background-color: #FF5722;} /* Orange */
.warning:hover {background: #F4511E;}

.danger {background-color: #89bdd3;} /* Red */ 
.danger:hover {background: #9ad3de;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
.default1 {background-color: #00BCD4;} /* Gray */ 
.default1:hover {background: #ddd;}
.default2 {background-color: #F58F84;} /* Gray */ 
.default2:hover {background: #8D608C;}
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #9DE0AD ;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
    display: flex;
    align-items: stretch;
    perspective: 1500px;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
    transform-origin: bottom left;
}

#sidebar.active {
    margin-left: -250px;
    transform: rotateY(100deg);
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article, a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}



/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

#sidebarCollapse {
    width: 40px;
    height: 40px;
    background: #f5f5f5;
}

#sidebarCollapse span {
    width: 80%;
    height: 2px;
    margin: 0 auto;
    display: block;
    background: #555;
    transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
    transition-delay: 0.2s;
}

#sidebarCollapse span:first-of-type {
    transform: rotate(45deg) translate(2px, 2px);
}
#sidebarCollapse span:nth-of-type(2) {
    opacity: 0;
}
#sidebarCollapse span:last-of-type {
    transform: rotate(-45deg) translate(1px, -1px);
}


#sidebarCollapse.active span {
    transform: none;
    opacity: 1;
    margin: 5px auto;
}


/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
        transform: rotateY(90deg);
    }
    #sidebar.active {
        margin-left: 0;
        transform: none;
    }
    #sidebarCollapse span:first-of-type,
    #sidebarCollapse span:nth-of-type(2),
    #sidebarCollapse span:last-of-type {
        transform: none;
        opacity: 1;
        margin: 5px auto;
    }
    #sidebarCollapse.active span {
        margin: 0 auto;
    }
    #sidebarCollapse.active span:first-of-type {
        transform: rotate(45deg) translate(2px, 2px);
    }
    #sidebarCollapse.active span:nth-of-type(2) {
        opacity: 0;
    }
    #sidebarCollapse.active span:last-of-type {
        transform: rotate(-45deg) translate(1px, -1px);
    }

}
</style>

    <body>


           
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                   
                </div>

                <ul class="list-unstyled components">
                    <p>Welcome to Civil Hospital Gurgaon </p>
                    <li>
                        <a href="/">New Orders Fetch</a>
                    </li>
                     
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">About</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="https://www.linkedin.com/in/shubham-kumar-446224120/" target="_blank" >Developer</a></li>
                            <li><a href="http://squareknot.in/" target="_blank" >Company</a></li>
                           
                        </ul>
                    </li>
                    
                   
                
                </ul>

                <ul class="list-unstyled CTAs">
                    
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                            
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left" >
                                
	<li><a><STRONG>Civil Hospital </STRONG></a> </li>
               
                            </ul>
                            <button class="nav navbar-nav navbar-right"><a href="/Logout" class="btn danger" > Logout  </a>
               </button>
                        </div>
                    </div>
                </nav>
<div >
<div></div></div>
<p></p>
  
<a href="/New" class="btn danger" >  <h3  ><strong>1</strong> </h3>New AppointMent  </a>




<p></p>
<div id="preloader">
        <div class="spinner"></div>
</div>
<table  id="customers" class="ui-widget ui-widget-content">
    
        
    <tbody>
          <tr>
            <th >ID</th>           
	         
	<th >Name</th>

            
		<th>Phone</th>
           <th>Gender</th>
            
            <th>Symptoms</th>
            <th> Speciality</th>
	    
            
        </tr>
  
          
  
    <tr>
            <td >Shubham</td>           
	         
	<td >8447033951</td>

            
		<td>test123	</td>
           <td>Male</td>
            
            <th>Cough</th>
            <th> General Practice</th>
	    
            
        </tr>
          </tbody>
              </table>
              </div>
      </div>
     	
  
      

        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
    </body>
</html>


