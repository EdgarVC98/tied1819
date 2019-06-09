 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="alerts.css">
    <link rel="stylesheet" href="btn.css">
    <title>SmartHome</title>
	
    <link rel="stylesheet" href="style2.css">
    <!-- Refresh automático -->
    <meta http-equiv="refresh" content="1000"> 	
	<?php 
		$file_prefix_img = "webcam";
	?>
	<?php 
        $file_prefix ="lab06_temperatura";
        $file_prefix2 ="lab06_luminosidade";
        $file_prefix3 ="lab06_porta";
        $file_prefix4 ="lab06_Estore";
        $file_prefix6 ="lab06_avisos";
    ?>
    <!-- jquery -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>		

    <!-- bootstrap -->	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- Código do toogle (on/off) -->
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

	<script>
		var status_onchange_event_ready_red = false;  
		
		$(document).ready(function(){
			$("#info").hide();
			$("#error").hide();
			getLedStatus("red");	

			$('#status_red').on('change', function () {
				if (status_onchange_event_ready_red){
					var str_status = $('#status_red').prop('checked') ? "on" : "off";
					setLedStatus("red", str_status);
				}
				status_onchange_event_ready_red = true;				
			});			
		});		
		

			
	

		  
		
		f		
	</script>	
</head>
<body>
   <div class="wrapper">
       <!--Navigation-->
<!--
        <nav class="main-nav">
           <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
           </ul>
        </nav>   
-->
        <!--Top Container-->
        <section class="top-container">
            <header class="showcase">
                <h1>SmartHome</h1>
            </header>
        </section>
        
        <!--Boxer Section-->
        <section class="boxes">
            <div class="box">
                <i class="fa fa-map-marker fa-4x"style="color:#DDDDDD;"><!-- icon --></i>
                <h3>Distância</h3>
                <div class="container">
                    <form>  
                        <div class="form-group">                    
                            <div class="row">
                            
                               
                                
                            </div>        
                        </div>          
                    </form>
                </div>
                    <?php
                        $file2 = "files/" . $file_prefix2 . "_valor.txt";
							if (file_exists($file2))
								echo(file_get_contents($file2)); 
							else
								echo("(erro: nao foi possivel obter dados!)"); 	
                    ?>
            </div>
            <div class="box">
                <i class="fas fa-thermometer fa-4x"style="color:#DDDDDD;"><!-- icon --></i>
                <h3>Temperatura</h3>
                <div>
                    <?php
                        $file = "files/" . $file_prefix . "_valor.txt";
							if (file_exists($file))
								echo(file_get_contents($file)); 
							else
								echo("(erro: nao foi possivel obter dados!)"); 	
                    ?>
                </div>
            </div>




            <div class="box">
			<i class="fa fa-snowflake fa-4x"style="color:#DDDDDD;"><!-- icon --></i>

                <h3>Ventoinha</h3>
                <div class="container">
                    <form>  
                        <div class="form-group">                    
                            <div class="row">
                            
                                <div class="col-sm-4">
                                    <label for="status_red"></label> 
                                    <br /> <br />
                                    <input id="status_red" name="status_red" type="checkbox" data-toggle="toggle" data-on="Ligado" data-off="Desligado"  class="form-control">
                                </div>
                               
                                
                            </div>        
                        </div>          
                    </form>
                </div>
                    <?php
                        $file3 = "files/" . $file_prefix3 . "_valor.txt";
							if (file_exists($file3))
								echo(file_get_contents($file3)); 
							else
								echo("(erro: nao foi possivel obter dados!)"); 	
                    ?>
            </div>
            <div class="box">
                <i class="fa fa-exclamation-triangle fa-4x"style="color:#DDDDDD;"><!-- icon --></i>
                <h3>Alarme</h3> 
                <div class="container">
                    <form>	
                        <div class="form-group">					
                            <div class="row">
                            
                                <div class="col-sm-4">
                                    <label for="status_red"></label> 
                                    <br /> <br />
                                    <input id="status_red" name="status_red" type="checkbox" data-toggle="toggle" data-on="Ligado" data-off="Desligado"  class="form-control">
                                </div>
                               
                                
                            </div>		  
                        </div>			
                    </form>
                </div>
                
            </div>
            <div class="box">
                <i class="fa fa-cog fa-spin fa-4x fa-fw"style="color:#DDDDDD;"><!-- icon --></i>
				<span class="sr-only">Loading...</span>
                <h3>Histórico</h3>
                    <?php
                        $file4 = "files/" . $file_prefix4 . "_valor.txt";
							if (file_exists($file4))
								echo(file_get_contents($file4)); 
							else
								echo("(erro: nao foi possivel obter dados!)"); 	
                    ?>
            </div>
        </section>
        <!--Info Section-->


        <section class="info">
            <img src="images/<?php echo($file_prefix_img); ?>.jpg" alt="última imagem capturada" style="border:3px solid gray">
            <div> 
                <div class="container">
                  <h2>Alerts</h2>
                  
                      <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php
                        $file6 = "files/" . $file_prefix6 . "_valor.txt";
							if (file_exists($file6))
								echo(file_get_contents($file6)); 
							else
								echo("(erro: nao foi possivel obter dados!)"); 	
                        ?>
                      </div>
                        <div id="info"class="alert alert-success" role="alert"></div>
	                    <div id="error" class="alert alert-danger" role="alert"></div> 

                </div>
            </div>  
        </section>


        <!--Portfolio-->
        <section class="portfolio">
            <div>
            <br />
            <h3>Data de atualização:</h3>
            <p>
                <?php 
                    $file5 = "files/" . $file_prefix_img . "_data.txt";
                    if (file_exists($file5))
                        echo(file_get_contents($file5)); 
                    else
                        echo("(erro: não foi possível obter dados!)"); 					
                ?>
            </p>
            </div>
        </section>
        <br />
        <!--Footer-->
        <footer>
            <p>Ti Pl1_G07 &copy; 2018/19</p>
        </footer>
   </div>
    <!--Wrapper Ends -->
</body>
</html>
