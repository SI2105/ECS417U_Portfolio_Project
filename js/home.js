

const mediaquery = window.matchMedia("(max-width: 768px)");

function navdisplay(e){
    let nav = document.querySelector("nav");
    if(e.matches){

        nav.style.display = "none";

    }

    else{
        nav.style.display = "block";
    }

}

mediaquery.addEventListener("change", navdisplay)


let hamburgermenu = document.querySelector("#hamburgermenu");


function hamburgermenufunc(e){

    let nav = document.querySelector("nav");


    if(nav.style.display === "block"){
        nav.style.display = "none";
    }
    
    else{
        nav.style.display = "block";
    }
}



hamburgermenu.addEventListener('click', hamburgermenufunc);



function clearfields(e){

    let clearconfirm = window.confirm("Are you sure you want to clear the fields");
    if (!clearconfirm){

        e.preventDefault();

    }

}

function checkfields(e){
    let title = document.querySelector("#post_title");
    let post = document.querySelector("#post");

    if(title.value == ""|| title.value == null ){
        e.preventDefault()
   
        title.style.border = "0.25rem solid rgba(255, 0, 0, 0.75)";
        title.style["background-color"] = "ivory"
    }

    if(post.value == "" || post.value == null ){
        e.preventDefault();
        post.style.border = "0.25rem solid rgba(255, 0, 0, 0.75)";
        post.style["background-color"] = "ivory"
    }

}

function resetfields(e){
  
    e.target.style.border = "None"
    //Changed
}



function commentsubmit(e,commentid){
    
    document.getElementById(commentid).submit();
}

