<?php
header("Content-Type: text/css; charset=utf-8");
?>
h3{
	text-align: center;
}
.barra{
	width: 100%;
	height: 15%;
	display: block;
	background: rgb(60,195,60);
	border: 1px solid black;
 	border-radius: 10px;
}
.barra a{
	width: 200px;
	height: 50px;
	border-right: 1px solid black;
	display: inline-block;
	text-align: center;
	line-height: 50px;
	background: rgb(55,190,55);
	text-decoration: none;
	color: black;
	font-size: 20px;
	margin-right: -4px;

}
.barra a:hover{
	background: rgb(65,200,65);
	color: rgb(10,10,10);
}

.entrada{
	width: 70%;
	margin-left: 15%;
	float: left;
	background-color: rgb(160,180,235);
	margin-top: 1%;
 	border-radius: 10px;
 	text-align: left;
}
.user{
	float: left;
	margin-left: 1%;
}
.date{
	float: right;
	margin-right: 1%;
}
.content{
	width: 90%;
	float: left;
	margin-left: 5%;
	word-break: break-all;
	white-space: pre-wrap;  
}

#formulario{
	width: 80%;
	height: 500px;
	margin: auto;
	margin-top: 20px;
}
#formulario form {
	margin: auto;
}
#filtros{
	background-color: rgb(180,200,255);
	height: 20px;
	width: 997px;
	display: block;
	border-bottom: 1px solid rgb(150,150,150);
}
#pages{
	background-color: rgb(180,200,255);
	height: 50px;
	width: 997px;
	display: block;
	border-top: 1px solid rgb(150,150,150);
	float: left;
	margin-top: 1%;
}
.ini{
	border-top-left-radius: 10px;
 	border-bottom-left-radius: 10px;
}
.log{
	float: right;
	border-right: none;
	border-left: 1px solid black;
 	border-top-right-radius: 10px;
 	border-bottom-right-radius: 10px;
}

a.pag{
	text-decoration: none;
	font-size: 20px;
	color: red;
	margin-right: 1px;
}
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.paginput{
	width: 16px;
	text-align: center;

}
.formpag{
	display: inline;
	width: 16px;
}
.input{
	display:inline-block;
    width:100%;
    text-align: center;
	margin-top: 20px;
	margin-left: auto;
}
.base{
	display: inline-block;
	width: 80%;
	height: auto;
	background-color: rgb(175,195,250);
	text-align: center;	
	margin-left: 10%;
	overflow: none;	
	float: left;
	border-left: 1px solid rgb(150,150,150);
	border-right: 1px solid rgb(150,150,150);
}
input{
 	background-color: #f8f8f8;
 	border-radius: 4px;
}

textarea{
	display: block;
	width: calc(80%);
  	height: 150px;
 	padding: 10px;
 	padding-bottom: 100px;
  	box-sizing: border-box;
 	border: 2px solid #ccc;
 	border-radius: 4px;
 	background-color: #f8f8f8;
  	resize: none;
  	word-break: break-word;
  	margin: auto;
}
.bajo{
	text-align: center;
	display: block;
	color: blue;
	width: 100px;
	margin: auto;
	margin-top: 10px;
}
.error{
	text-align: center;
	display: block;
	color: red;
	width: 200px;
	margin: auto;
	margin-top: 10px;
}
.in{
	text-align: center;
}
.valid {
  color: green;
}
.valid:before {
  position: relative;
  left: -35px;
  content: "Las contraseñas coinciden ✔";
}
.invalid {
  color: red;
}
.invalid:before {
  position: relative;
  left: -35px;
  content: "Las contraseñas no coinciden ✖";
}
#validation{
	text-align: center;
	display: none;
	width: 210px;
	margin-left: 45%;
}
.perfil{
	float: right;
	border-right: none;
	border-left: 1px solid black;
 	border-top-right-radius: 10px;
 	border-bottom-right-radius: 10px;
 	color: white;
}