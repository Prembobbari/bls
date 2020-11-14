<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8">
    <title>
      lists
    </title>
    <style>
      ul.listA{
        
         list-style: square;
        
        list-style: circle;
    
       list-style: upper-roman;
        
        list-style-image: url(images/blacksquare.gif)
      }
      
      ul.listB{
        list-style: none;
		padding: 0;
		margin: 0;
	  }
	  ul.listB li{
		background-image: url(images/bluesquare.gif);
		background-repeat: no-repeat;
		background-position: 0px center;
		padding-left: 22px;
	  }
	</style>
  </head>
  
  <body>
    <p>
      A list of European capitals:
    </p>
    <ul class="listA">
      <li>
        Paris
      </li>
      <li>
        London
      </li>
      <li>
        Madrid
      </li>
  </ul>
  <p>
    A list of European capitals:
  </p>
  <ul class="listB">
    <li>
      Paris
      </li>
      <li>
        London
      </li>
      <li>
        Madrid
      </li>
  </ul>
  </body>
  
  
</html>