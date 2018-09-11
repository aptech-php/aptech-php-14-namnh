function evnetbuton(){
    // var x = document.getElementById("bien");
    
    //  if (x.style.display === "none") {
    //      x.style.display = "block";
    //  } else {
    //      x.style.display = "none";
    //  }

    var x = document.getElementById("bien") ;
    x.className;
   // x.classList;
    
    console.log( x.className);
    // if(x.className.includes('d-block')){ classname chứa chỉ một thuộc tính của class
      
    //   x.className = 'd-none';
     
    // }
    // else{
    //     x.className = 'd-block';
    //     x.className += ' bg-dark'; 
       
        
    // }
    if(x.classList.contains('d-none')){ //list chứa luôn một mãng của classs
        x.classList.remove('d-none');
        x.classList.add('d-block');
    }
    else{
        x.classList.remove('d-block');
        x.classList.add('d-none');
    }


}function demohamper(){
    //flex-column
    var n = document.getElementById('hamberger');
    n.classList;
    if(x.classList.contains('d-none')){ //list chứa luôn một mãng của classs
        x.classList.remove('d-none');
        x.classList.add('d-block');
    }
    else{
        x.classList.remove('d-block');
        x.classList.add('d-none');
    }
    
}

$(document).ready(function(){
    $('#an').click(function(){
         $('#hiden').toggle(1000);
    });

    

}

);

function demomenu(){
    //flex-column
    var x = document.getElementById('demohamberger');
   
    x.classList;
    if(x.classList.contains('d-none') ){ //list chứa luôn một mãng của classs
        x.classList.remove('d-none');
        x.classList.add('d-block');
    }
    else{

        x.classList.remove('d-block');
        x.classList.add('d-none');
    }
    
}

// function myFunction(x) {
//     if (x.matches) { // If media query matches
//         x.classList.remove('d-none');
//         x.classList.add('d-block');
//     } else {
        
//     }
// }

// var y = window.matchMedia("(min-width: 200px)");
// myFunction(y); // Call listener function at run time
// y.addListener(myFunction); // Attach listener function on state changes
 
