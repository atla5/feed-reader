<!DOCTYPE html>
<html lang="en">
    
  <head>
    <title>FeedReader - Aidan Sawyer</title>
    <meta charset="UTF-8">
      
    <!--local storage-->
    <script type="text/javascript">
        if(localStorage){
  
          $(document).ready(function(){
              
            function init() {
                if (localStorage["user_name"]) {
                    $("#userName").val(localStorage["user_name"]);
                }
                if (localStorage["pass_word"]) {
                    $("#passWord").val(localStorage["pass_word"]);
                }
            }
          
            init();
          
            $(".save").click(function(){
              // Get input name
              var username = $("#userName").val();
              var password = $("#passWord").val();
            
          	  // Store data
              localStorage.setItem("user_name", username);
              localStorage.setItem("pass_word", password);

          	  login();
            });
                    
            $(".access").click(function(){
          	    // Retrieve data
          		alert("Name:  " + localStorage.getItem("user_name") + " | " + localStorage.getItem("pass_word"));
            });
            
          });
        
        } else{
          alert("Sorry, your browser do not support local storage.");
        }
    </script>
    
    <!--web worker-->
    
  </head>
  
  <body>
    
    <div class="row">
      
      <!-- navigation pane -->
      <div id="navigationPane" class="col-xs-2 left">
        <div class="navigation">
          <?php include_once 'selector-pane.html'; ?>
        </div>	
      </div> 
      
      <!-- main body -->
      <div id="content" class="col-xs-8 col-md-10 content">
        <!--content to be added-->
      </div>
      
      </div>
    
    </div>
  </body>