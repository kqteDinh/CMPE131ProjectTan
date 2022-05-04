function showTableData() {
    document.getElementById('grades').innerHTML = "";
    var myTab = document.getElementById('myTable');
  
    // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
    for (i = 1; i < myTab.rows.length; i++) {
  
        // GET THE CELLS COLLECTION OF THE CURRENT ROW.
        var objCells = myTab.rows.item(i).cells;
  
        // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
        for (var j = 1; j < objCells.length; j++) {
           // grades.innerHTML = grades.innerHTML + ' print: ' + objCells.item(j).innerHTML;
        }
        //grades.innerHTML = grades.innerHTML + '<br />';     // ADD A BREAK (TAG).
    }
    console.log("Length:" + objCells.length);
    console.log("Cell:" + objCells.item(0).innerHTML);
   
    // Gets the names of the categories
    for (i = 1; i < myTab.rows.length; i++) {
      var categoryNames = myTab.rows.item(i).cells;
      for (var j = 1; j < categoryNames.length; j++) {
        //grades.innerHTML = grades.innerHTML + ' category: ' + categoryNames.item(0).innerHTML;
        if(!categories.includes(categoryNames.item(0).innerHTML)){
        categories.push(categoryNames.item(0).innerHTML);
        }
        console.log ("Print the names of the categories:" + categories);
        break;
    }
    //grades.innerHTML = grades.innerHTML + '<br />';     // ADD A BREAK (TAG).
    }
    console.log(categories);
  
    //gets score given
    totalScore=[];
    for (i = 1; i < myTab.rows.length; i++) {
      var scoreGiven = myTab.rows.item(i).cells;
      for (var j = 1; j < scoreGiven.length; j++) {
       // grades.innerHTML = grades.innerHTML + ' score: ' + scoreGiven.item(1).innerHTML;
        totalScore.push(parseFloat(scoreGiven.item(1).innerHTML));
       
        console.log ("Print the scores:" + totalScore);
        break;
    }
    //grades.innerHTML = grades.innerHTML + '<br />';     // ADD A BREAK (TAG).
    }
    console.log(totalScore);
  
    //gets total points
    possiblePoints =[];
    for (i = 1; i < myTab.rows.length; i++) {
      var totalPoints = myTab.rows.item(i).cells;
      for (var j = 1; j < scoreGiven.length; j++) {
        //grades.innerHTML = grades.innerHTML + ' total points: ' + totalPoints.item(2).innerHTML;
        possiblePoints.push(parseFloat(totalPoints.item(2).innerHTML));
       
        console.log ("Print the points:" + possiblePoints);
        break;
    }
    //grades.innerHTML = grades.innerHTML + '<br />';     // ADD A BREAK (TAG).
    }
    console.log(possiblePoints);
  
    //gets total weight
    allWeights=[];
    for (i = 1; i < myTab.rows.length; i++) {
      var totalWeight = myTab.rows.item(i).cells;
      for (var j = 1; j < scoreGiven.length; j++) {
       // grades.innerHTML = grades.innerHTML + ' total points: ' + totalWeight.item(3).innerHTML;
        allWeights.push(parseFloat(totalWeight.item(3).innerHTML));
       
        console.log ("Print the weights:" + allWeights);
        break;
    }
    //grades.innerHTML = grades.innerHTML + '<br />';     // ADD A BREAK (TAG).
    }
    console.log(allWeights);
    
    for(r=1; r<categories.length;r++){
      if(categories.includes("Enter Category Name")){
        console.log("Please enter a value in all Category fields");
        grades.innerHTML = grades.innerHTML + "Please enter a value in all Category fields" + '<br />'+ '<br />';
        break;
      }
  
    }
    //display the total weight
    var sum =0;
    for (a=0; a<allWeights.length;a++){
      sum +=allWeights[a];
    }
    console.log("this is the total weight:" +sum);
    var tot=0;
    //tot =((totalScore[1]/possiblePoints[1])*allWeights[1]);
    //console.log(tot);
   if (sum!=100){
     grades.innerHTML = grades.innerHTML + " please make sure total weight adds up to 100" + '<br />';
   } else if(sum==100){
     for(b=0;b<totalScore.length;b++){
       if(possiblePoints[b]>0 && totalScore[b]>0){
        for( i=1; i<totalScore.length;i++){
        tot =((totalScore[i]/possiblePoints[i])*allWeights[i]);
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
}
}