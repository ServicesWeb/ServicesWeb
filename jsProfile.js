// function for description on profile.php
/*function showMore() {
   document.getElementById("description").style.height = "auto";
   document.getElementById("showMore").style.visibility = "hidden";
}*/

//  function for mouseover and mouseleave in profile.php page
$(".jsShow").mouseenter(function(){
     $(".jsShow").css("background-color", "orange");
});
$(".jsShow").mouseleave(function(){
     $(".jsShow").css("background-color", "white");
});


//-----------------------------------------------------------------------
var myArray;
var monthList = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]; // change month from number to character
var monthNumber = {Jan:1, Feb:2, Mar:3, Apr:4, May:5, Jun:6, Jul:7, Aug:8, Sep:9, Oct:10, Nov:11, Dec:12};   // change month from character to number

var xmlhttpCall = new XMLHttpRequest();
xmlhttpCall.onreadystatechange = function() {
  if (xmlhttpCall.readyState == 4 && xmlhttpCall.status == 200) {
      myArray = JSON.parse(xmlhttpCall.responseText);
      showCalendar();
  }
}
xmlhttpCall.open("GET", "calendar.json", true);
xmlhttpCall.send();

var d = new Date();
var Today = [d.getDate(), d.getMonth()+1, d.getFullYear()];
function showCalendar(){            // get current month and year, and show calendar
  var x = monthList[d.getMonth()];
  var y = d.getFullYear();
  var j = 0;
  while (myArray[j].Month != x || myArray[j].Year != y){
    j++;
  }
  var days = myArray[j].Days;
  newCalendar(y, x, days);
}

function updateMonth(step) {
  var old = document.getElementById("monthYear").innerHTML.split(" ");
  var oldMonth = old[0];
  var oldYear = old[1];
  var newMonth;
  var newYear;
  if (step == 1){                      // next month
    for (var i = 0; i < 12; i++){
      if (oldMonth == monthList[i]){
        if (i == 11){
          newMonth = "Jan";
          newYear = 1+ parseInt(oldYear);
        }else {
          newMonth = monthList[i+1];
          newYear = oldYear;
        }
      }
    }
  } else if (step == -1){               // previous month
    for (var i = 0; i < 12; i++){
      if (oldMonth == monthList[i]){
        if (i == 0){
          newMonth = "Dec";
          newYear = -1 + parseInt(oldYear);
        }else {
          newMonth = monthList[i-1];
          newYear = oldYear;
        }
      }
    }
  }
  var j = 0;
  while (myArray[j].Month != newMonth || myArray[j].Year != newYear){
    j++;
    //if (j >= myArray.length)
  }
  var days = myArray[j].Days;
  newCalendar(newYear, newMonth, days);
}

function newCalendar(year, month, days){
  var monthNum = monthNumber[month];
  $("#monthYear").html(month + " " + year);
  $("#addhidden").append("<input type='hidden' name='year' value="+year+">");
  $("#addhidden").append("<input type='hidden' name='month' value="+month+">");

  $(".update").remove();                    // clear the old calendar

  for (var j = 0; j < Math.ceil(days.length/7); j++){
    $("#calendarShow").append("<tr class='update'></tr>");
    for (var i = 0; i < 7; i++){
      var ind = j*7+i;
      if (ind < days.length && days[ind] != 0){
        if ((year < Today[2]) || (year == Today[2] && monthNum < Today[1]) || (year == Today[2] && monthNum == Today[1] && days[ind] < Today[0])) {
          $("#calendarShow tr:last-child").append("<td><label class='markoffDays'>"+days[j*7 + i]+"</label></td>");  // mark off the past days, so they will be unselectable
        } else {
          $("#calendarShow tr:last-child").append("<td><label class='displayDays'><input type='checkbox' name='days_select[]' value="+days[j*7 + i]+">"+days[j*7 + i]+"</label></td>");
        }
      }else{
        $("#calendarShow tr:last-child").append("<td></td>");
      }
    }
  }

  var called=false;      // this line and the following fucntion try to solve the problem of twice execution of click. This is the solution I got.
  $(".displayDays").click(function(){   // add class for the selected days, to change their backgroud color
      var hert = $(this);
      if (!called){
        called=true;
        setTimeout(function(){
          //hert.toggleClass("selectedDays");                  // toggle on label
          hert.closest("td").toggleClass("selectedDays");     // use "closest" to find the parent, and toggle on td, instead of label
          called=false;
        }, 100);
      }
  });

}

/* pure JS mehtod to add HTML tag, same role as above, but more difficult to follow and not clear
var cc = document.getElementById("calendarShow");
for (var j = 0; j < Math.ceil(days.length/7); j++){
  var tr1 = document.createElement("tr");
  tr1.setAttribute("class", "update");
  for (var i = 0; i < 7; i++){
    var td1 = document.createElement("td");
    var labl = document.createElement("label");
    var inp = document.createElement("input");          // for <td><label><input></lable></td>
    var ind = j*7+i;
    inp.setAttribute("type", "checkbox");
    inp.setAttribute("name", "days_select[]");
    if (ind < days.length && days[ind] != 0){
      inp.setAttribute("value", days[j*7 + i]);
      labl.innerHTML = days[j*7 + i];
      td1.setAttribute("class", "displayDays");      // in this if statement, only for valid days.   here for the td box
    }else{
      inp.setAttribute("value", "");
      labl.innerHTML = "";
    }
    labl.appendChild(inp);
    td1.appendChild(labl);
    tr1.appendChild(td1);  // <td class="displayDays"><label><input type="checkbox" name="days_select[]" value="xx">xx</lable></td>
  }
  cc.appendChild(tr1);     // <tr class="update"></tr>
}
*/
