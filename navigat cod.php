body
{
  margin:0;
    background: #fff;
    font-family:'work-sans', sans-serif;
    font-weight:400; 
    
    
}
//.container
{
    width:80%;
    margin:0 auto;
}

//header
{
  background: black;  
}

//header::after
{
 content:"";
    display:table;
    clear:both;
    
    
}
//.logo
{
    float: left;
    padding: 10px 0;
}

//nav
{
    float:right;
}

//nav ul
{
 margin:0;
    padding:0;
    list-style: none;
    
}

//nav li
{
   display:inline-block;
    margin-left: 70px;
    padding-top: 23px;
    
    position: relative;
}

//nav a
{
  color:white;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    
}

//nav a:hover
{
    color: brown;
}

//nav a::before
{
 content: "" ;
    display:block;
    height: 5px;
    width: 100%;
    background-color:coral ;
    
    position: absolute;
    top: 0;
    width: 0%;
    
    transition: all ease-in-out 1000ms;
}

//nav a:hover::before
{
    width:100%;
}

.banner
{
    margin-top: 10;
    margin-left: 2;
}

.img
{
    margin: 0;
    margin-left: 10;
    border-top: 2px solid white;
    border-top-width: thick;
    border-top-style:solid;
    
}

h5
{
    color: darkgray;
    margin-top: 0;
    margin-left: 2;
    padding-top: 0;
}

h1
{
  color:black;
    margin-left: 10;
    margin-top:40;
    padding-top: 0;  
    
}

h3
{
    text-align: center;
}

sidenav h4
{
    text-align: right;
    margin-right: 60;
    margin-top: 20;
}

sidenav ul li
{
    text-align: right;
    margin-right: 120;
    list-style-type: none;
}

p
{
    font-size:15px;
}

table ul li
{
list-style-type: none;
    font-style: normal;
    font-size:14px;
    text-decoration-color:dimgrey;
    line-height: 30px;
    
}

//footer
{
 display:inline-block;   
}

*
{
    margin:0px;
    padding: 0px;
    box-sizing: border-box;
}

body
{
    font-family: sans-serif;
}

a
{
    text-decoration: none;
    outline: none;
}

a img
{
    border:none;
}

.clr{
    clear:both;
}

footer
{
    background-color:dodgerblue;
    color: white;
   margin-top: 1000px;
    
   
    
}

ul
{
    list-style-type: none;
    font-size: 20px;
    
}

.list{
    align-content: center;
    display: block;
    padding-left: 15px;
    padding-bottom: 5px;
    padding-top: 5px;
    line-height: 30px; 
     border: 5px solid none;
    padding-left: 0px;
    text-align: left;
    margin-right: 10px;
    padding-right: 10px;
    
}

.look
{
      
 border: 5px solid none;
    display: inline-block;
    margin-left: 15px;
    width: 415px;
}