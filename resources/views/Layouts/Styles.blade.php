<head>
<title>Header example</title>
<meta charset="utf-8">
<meta name="viewport" content ="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootsrap.min.js"></script>


</head>
<style>
.button{
    background-color: red;
    border: none;
    color:white;
    padding: 16px 30px;
    text-align: center;
    text-decoration:none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 12px;
}

.body{
    font-family: Arial;
    padding:10px;
    background: #f1f1f1;
}
.header{
    font-size: 50px;
}

.topnav a{
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.topnav a:hover{
    background-color: #ddd;
    color: black;
}

.leftcolumn{
    float: left;
    width:75%;
}

.rightcolumn{
    float:left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

.fakeimg{
    background-color: #aaa;
    width: 100%;
    padding: 20px;

}

.card{
    background-color:white;
    padding: 20px;
    margin-top: 20px;

}

.row:after{
 content: "";
 display:table;
 clear:both;

}
.footer{
    padding:20px;
    text-align:center;
    background: #ddd;
    margin-top:20px;
}

@media screen and (max-width: 800px){
    .leftcolumn, .rightcolumn{
        width:100%;
        padding: 0;
    }
}

@media screen and (max-width: 400-x){
    .topnav a {
        float: none;
        width:100%;

    }
}
/*aligning*/
.left{float:left;}
.right{float:right;}
.center{margin-left:50%;}
.slightCenter{margin-left:43%;}
</style>