// JS LIBRARY

const ID = function( id ) { return document.getElementById( id ); }; // ID("id ref")
const CLASS = function( className , number ) {return document.getElementsByClassName( className )[number]; }; // CLASS("class ref" , number)
const QUERY = function( query , number ) { return document.querySelectorAll( query )[ number]; }; // QUERY("query" , number)




// Content Page Loader
function fadeIn() {
    ID("loader").style.opacity = "100%";
}



// gallery move //

// var galleryX = -270;

// function galleryLeft() {
//     galleryX = galleryX + 340;
//     let left = galleryX + "px";
//     CLASS("gallery-inner",0).style.left = left;
// }
  
// function galleryRight() {
//     galleryX = galleryX - 340;
//     let left = galleryX + "px";
//     CLASS("gallery-inner",0).style.left = left;
// } 


  

  function submitEmail(){
    ID("mybtn").disabled = true;
    
    var formdata = new FormData();

    formdata.append( "email", ID("email").value );
    
    var ajax = new XMLHttpRequest();

    ajax.open( "POST", "../views/includes/email-parser.php" );

    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200) {
            if(ajax.responseText == "success"){
                ID("mailing-message").innerHTML = '<p>Thank you, your email has been added to any future newsletters. Thank you</p>';
            } else {
                ID("status").innerHTML = ajax.responseText;
                ID("mybtn").disabled = false;
            }
        }
    }

    ajax.send( formdata );

 }