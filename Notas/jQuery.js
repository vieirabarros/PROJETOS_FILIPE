$(#id).

//Get atribute value
$("element or id or class").attr("type")

//Set atribute value
$("element or id or class").attr("type", "value")

//Remove atribute
$("element or id or class").removeAttr("atribute")

//Methods
text() //sets or returns the text content of selected elements.
html() //sets or returns the content of selected elements (including HTML markup).
val() //sets or returns the value of form fields.
attr() //sets or returns the value of attributes.
removeAttr() removes the specified attribute

//Set content
$("element or id or class"). text("content")


$("a").attr(href, )

//Set Css
$("element or id or class").css({"property": "value", "property2":"value2"})


//Select parent
$("element or id or class").parent()

//Select all parents
$("element or id or class").parents()

children()
siblings()
next()
nextAll()
prev()
prevAll()
eq()

$("p").eq(0) select the first element p
.remove() remove element

empty() method is used to remove the child elements of the selected element(s).

//-------------------------------------------------------------

//EVENTS

//Mouse
click //occurs when an element is clicked.
dblclick //occurs when an element is double-clicked.
mouseenter //occurs when the mouse pointer is over (enters) the selected element.
mouseleave //occurs when the mouse pointer leaves the selected element.
mouseover //occurs when the mouse pointer is over the selected element.

Keyboard
keydown //occurs when a keyboard key is pressed down.
keyup //occurs when a keyboard key is released.

Form
submit //occurs when a form is submitted.
change //occurs when the value of an element has been changed.
focus //occurs when an element gets focus.
blur //occurs when an element loses focus.

Document
ready //occurs when the DOM has been loaded.
resize //occurs when the browser window changes size.
scroll //occurs when the user scrolls in the specified element.


event object, which contains properties and methods related to the event:
pageX, pageY the mouse position (X & Y coordinates) at the time the event occurred, relative to the top left of the page.
type the type of the event (e.g. "click").
which the button or key that was pressed.
data any data that was passed in when the event was bound.
target the DOM element that initiated the event.
preventDefault() prevent the default action of the event (e.g., following a link).
stopPropagation() Stop the event from bubbling up to other elements.


Ex:.
Shows which key was pressed

$("div").keydown(function (event){
alert(event.which)
})

Show where the mouse was at the time of the click

$("element").click(function(event){
alert(event.pageX)


We can also trigger events programmatically using the trigger() method


CREATE A TO DO LIST
<h1>My To-Do List</h1>
<input type="text" placeholder="New item" />
<button id="add">Add</button>
<ol id="mylist"></ol>

$(function() {
  $("#add").on("click", function() {
      //event handler
     //Create delete item button
     var val = $("input").val();
     if(val !== '') {
       var elem = $("<li></li>").text(val);
           $(elem).append("<button class='rem'>X</button>");
                 $("#mylist").append(elem);
                         $("input").val(""); //clear the input
//Remove the parent
$(".rem").on("click", function() {
  $(this).parent().remove();
  });
                               }
                                 
        });
        });




Create a new div element and apprend it to the element with id test

e=$("<div></div>")
$("#test").append(e)


hide()
show()
The toggle() method is used to toggle between hiding and showing elements.

fadeIn(time)
fadeOut(time)
 fadeToggle(time)
 fadeTo(time, opacity)



slideUp() and slideDown() 
methods are used to create a sliding effect on elements.
Again, similar to the previous toggle methods, the 

slideToggle()

animate() method lets you animate to a set value, or to a value relative to the current value.


$("div"). click(function(){
$("div").animate({width:"100px"}, 1000);
});

$("element").animate({property:"value"}, time);

Properties uses JSON camelCase format




MODULAR DESIGN/ATOMIC