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

