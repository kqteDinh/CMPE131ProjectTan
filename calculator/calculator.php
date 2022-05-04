<?php

echo <<< MFILE
<!DOCTYPE html>

<html lang="en">
<head>
<title>Calculator</title>
<link rel="icon" href="images/theLogo.png" sizes="32x32 64x64" type="image/png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <Link rel ="stylesheet" href="css/style.css">

</head>
<body>
<body style="background-color:#fcf4e1;">
<!--<link href='http://fonts.googleapis.com/css?family=TimesNewRoman:400,300,700' rel='stylesheet' type='text/css'>-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #a4c796;">
  <!-- Navbar content,,, also try this color instead #9DB597-->
 
  <div class='nav-brand'> 
 <a href='index.php'> 
   <img src="images/mylogo.png" alt='Official logo' width='65px' height='60px'> 
 </a> 
</div> 
  <a class="navbar-brand" href='index.php'>Then and Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href='objective.php'>Objective <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href='calculator.php'>Calculator <span class="sr-only">(current)</span></a>
        </li>
      <li class="nav-item active">
        <a class="nav-link" href='aboutme.php'>About Me <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href='studytime.php'>Study Time <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href='resources.php'>Studying Resources <span class="sr-only">(current)</span></a>
        </li>
    </ul>

 </a> 
</div> 
  </div>
</nav>
<style>
         th, td {
            border: 2px solid black;
         }
      </style>
<table class="table" id="myTable" style="width:500px; border: 2px solid black">
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Total Score</th>
      <th scope="col">Total Possible Points</th>
      <th scope="col">Weight</th>
    </tr>
  </thead>
  <tbody class="dynamics">
    <tr>
      <td contenteditable='true'>Enter Category Name</td>
      <td contenteditable='true'>Enter Score</td>
      <td contenteditable='true'>Enter Possible Points</td>
      <td contenteditable='true'>Enter the Weight</td>
     
    </tr>
    <tr>
      <td contenteditable='true'>Enter Category Name</td>
      <td contenteditable='true'>Enter Score</td>
      <td contenteditable='true'>Enter Possible Points</td>
      <td contenteditable='true'>Enter the Weight</td>
    </tr>
    <tr>
      <td contenteditable='true'>Enter Category Name</td>
      <td contenteditable='true'>Enter Score</td>
      <td contenteditable='true'>Enter Possible Points</td>
      <td contenteditable='true'>Enter the Weight</td>
    </tr>
  </tbody>
</table>
<p><input type="button" id="bt" value="Calculate" onclick="showTableData()" /></p>
<p id="grades"></p>
<!--<button type="button" class="btn btn-secondary btn-sm" name="AddRow">Add Row</button>
<button type="button" class="btn btn-primary btn-sm">Calculate</button>-->

<form action="" method="POST" onSubmit="return false;" onclick="someFunction()">
      <input type="submit" name="AddRow" value="Add row">
</form>


<script>
var categories=[];
var totalScore= [];
var allWeights = [];
var possiblePoints = [];
var completeGrade;

function someFunction() {
  var tbodyRef = document.getElementById('myTable');
  console.log('PRESSED2');
  console.log(document.getElementById('myTable').getElementsByTagName('tbody')[0]);
  var newRow = tbodyRef.insertRow(-1);
  var category = newRow.insertCell();
  var totalScore = newRow.insertCell();
  var totalPossiblePoints = newRow.insertCell();
  var weight = newRow.insertCell();

  var enterName = document.createTextNode('Enter Category Name');
  category.appendChild(enterName); 
  category.setAttribute('contenteditable', true) 


  var scoreString = document.createTextNode('Enter Score');
  totalScore.appendChild(scoreString);  
  totalScore.setAttribute('contenteditable', true)
  

  var pointString = document.createTextNode('Enter Possible Points');
  totalPossiblePoints.appendChild(pointString);
  totalPossiblePoints.setAttribute('contenteditable', true)


  var weightString = document.createTextNode('Enter the Weight');
  weight.appendChild(weightString);
  weight.setAttribute('contenteditable', true)

}
function showTableData() {
  document.getElementById('grades').innerHTML = "";
  var myTab = document.getElementById('myTable');


  // goes through each row of table.
  for (i = 1; i < myTab.rows.length; i++) {

      // gets all cells in current row
      var objCells = myTab.rows.item(i).cells;

      // reads in values of cells for current row
      for (var j = 1; j < objCells.length; j++) {
         // grades.innerHTML = grades.innerHTML + ' print: ' + objCells.item(j).innerHTML;
      }
      //grades.innerHTML = grades.innerHTML + '<br />';     // ADD A BREAK (TAG).
  }
  console.log("Length:" + objCells.length);
  console.log("Cell:" + objCells.item(0).innerHTML);
 
  // Gets the names of the categories
  categories = [];
  for (i = 1; i < myTab.rows.length; i++) {
    var categoryNames = myTab.rows.item(i).cells;
    for (var j = 1; j < categoryNames.length; j++) {
      if(!categories.includes(categoryNames.item(0).innerText)){
        //console.log(categoryNames.item(0));
      categories.push(categoryNames.item(0).innerText);
      }
      console.log ("Print the names of the categories:" + categories);
      break;
  }
  }
  console.log(categories);

  //gets score given
  totalScore=[];
  for (i = 1; i < myTab.rows.length; i++) {
    var scoreGiven = myTab.rows.item(i).cells;
    for (var j = 1; j < scoreGiven.length; j++) {
      totalScore.push(parseFloat(scoreGiven.item(1).innerHTML));
     
      console.log ("Print the scores:" + totalScore);
      break;
  }

  }
  console.log(totalScore);

  //gets total points
  possiblePoints =[];
  for (i = 1; i < myTab.rows.length; i++) {
    var totalPoints = myTab.rows.item(i).cells;
    for (var j = 1; j < scoreGiven.length; j++) {
      possiblePoints.push(parseFloat(totalPoints.item(2).innerHTML));
     
      console.log ("Print the points:" + possiblePoints);
      break;
  }
  
  }
  console.log(possiblePoints);
 
  var negativeScore = new Boolean(false);
  for(h=0; h<totalScore.length;h++){
    if(isNaN(totalScore[h])){
      console.log("Please enter a value in all Total Score fields");
      grades.innerHTML = grades.innerHTML + "Please enter a numerical value in all Total Score fields" + '<br />'+ '<br />';
      break;
    }
    if(totalScore[h]<0){
      negativeScore=true;
      grades.innerHTML = grades.innerHTML + "Please enter only positive values in all Total Score fields" + '<br />'+ '<br />';
      break;
    }

  }
  var negativePoints = new Boolean(false);
  for(g=0; g<possiblePoints.length;g++){
    if(isNaN(possiblePoints[g])){
      console.log("Please enter a value in all Possible Points fields");
      grades.innerHTML = grades.innerHTML + "Please enter a numerical value in all Possible Points fields" + '<br />'+ '<br />';
      break;
    }
    // does not allow negative values for possible points
    if(possiblePoints[g]<0){
      negativePoints=true;
      grades.innerHTML = grades.innerHTML + "Please enter only positive values in all Possible Points fields" + '<br />'+ '<br />';
      break;
    }
  
  }
 var categoryFilled = new Boolean(true);

  for(r=0; r<categories.length;r++){
    if(categories.includes("Enter Category Name") || categories.includes("<br>")){
      categoryFilled=false;
      console.log("Please enter a value in all Category fields");
      grades.innerHTML = grades.innerHTML + "Please enter a value in all Category fields" + '<br />'+ '<br />';
      break;
    }
  
  }
 
  //gets total weight
  allWeights=[];
  for (i = 1; i < myTab.rows.length; i++) {
    var totalWeight = myTab.rows.item(i).cells;
    for (var j = 1; j < scoreGiven.length; j++) {
      allWeights.push(parseFloat(totalWeight.item(3).innerHTML));
      console.log ("Print the weights:" + allWeights);
      break;
  }
  
}

var onlyAlphabetics = new Boolean(true);
for(w=0;w<categories.length;w++){
  if(!/^[\w\d\s]+$/.test(categories[w])){
    onlyAlphabetics=false;
    grades.innerHTML = grades.innerHTML + "Please enter only letters in Category fields" + '<br />' + '<br />';
    break;

  }
}

  console.log(allWeights);

  

  //display the total weight
  var sum =0;
  for (a=0; a<allWeights.length;a++){
    sum +=allWeights[a];
  }
  console.log("this is the total weight:" +sum);
  var tot=0;
 if (sum!=100){
   grades.innerHTML = grades.innerHTML + " Please make sure total weight adds up to 100" + '<br />';
 } else if(sum==100&& negativePoints==false && negativeScore==false&& categoryFilled==true &&onlyAlphabetics==true){
  for( k=0; k<totalScore.length;k++){
    tot +=((totalScore[k]/possiblePoints[k])*allWeights[k]);
  console.log(tot);
  }
  if (tot >=90){
    grades.innerHTML = grades.innerHTML + "your grade is an A";
  }
  if(tot>=80 && tot <90){
    grades.innerHTML = grades.innerHTML + "your grade is a B";
  }
  if (tot>=70 && tot<80){
    grades.innerHTML = grades.innerHTML + "your grade is a C";
  }
  if (tot >=60 && tot <70){
    grades.innerHTML = grades.innerHTML + "your grade is a D";
  }
  if (tot <60){
    grades.innerHTML = grades.innerHTML + "your grade is an F";
  }
}
}

</script>




<!-- Footer -->
<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-#fcf4e1 text-black-50">
    <div class="container text-center">
      <small>Copyright 2022 &copy; Kate Dinh- All Rights Reserved</small>
    </div>
  </footer>
<!-- Footer -->
<!--this needs to stay at the end of the body-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.51/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.52/js/bootstrap.min.js"></script>
</body>
</html>
MFILE;




/*function someFunction() {
  echo '<script type="text/javascript">',
  "var tbodyRef = document.getElementById('myTable')",
  "console.log('PRESSED2');",
  "console.log(document.getElementById('myTable').getElementsByTagName('tbody')[0]);",
  "var newRow = tbodyRef.insertRow(-1);",
  "var category = newRow.insertCell();",
  "var totalScore = newRow.insertCell();",
  "var totalPossiblePoints = newRow.insertCell();",
  "var weight = newRow.insertCell();",
  "var newText = document.createTextNode('new row');",
  "category.appendChild(newText);",
  "category.setAttribute('contenteditable', true)",
     "</script>"
;
}*/

function someFunction(){
  echo '<script type="text/javascript">', 
  "console.log('PRESSED');",
  "var tableRef = document.getElementById('myTable');",
  "var newRow   = tableRef.insertRow(-1);",
  "var newCell  = newRow.insertCell(0);",
  "var newElem = document.createElement( 'input' );",
  "newElem.setAttribute('name', 'links');",
  "newElem.setAttribute('type', 'text');",
  "newCell.appendChild(newElem);",
  "newCell = newRow.insertCell(1);",
  "newElem = document.createElement( 'input' );",
  "newElem.setAttribute('name', 'keywords');",
  "newElem.setAttribute('type', 'text');",
  "newCell.appendChild(newElem);",
  "</script>";
}


/*<script type="text/javascript">

    var tbodyRef = document.getElementById('myTable').getElementsByTagName('tbody')[0]

      // Insert a row at the end of table
      var newRow = tbodyRef.insertRow();

      // Insert a cell at the end of the row
      var newCell = newRow.insertCell();

      // Append a text node to the cell
      var newText = document.createTextNode('new row');
      newCell.appendChild(newText);
</script>*/

