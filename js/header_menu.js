document.addEventListener("DOMContentLoaded", () => {
    
    loadHeaderMenu();
});

function loadHeaderMenu()
{   
    //console.log("loadHeaderMenu() called");
    
    fetch("modules/header_menu.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({})
    })
    .then(async response => {

        // HTTP error
        if (!response.ok) {
            let err = await response.text();
            throw new Error("Server error: " + err);
        }

        // JSON parse
        return response.json();
    })
    .then(answer => {
        // Backend error?
        if (answer.error) {
            console.error("Backend error:", answer.error);
            return;
        }

        localStorage.setItem("headerList", JSON.stringify(answer));
        //console.log("headerList stored:", answer);
        renderHeaderMenu();
    })
    .catch(error => {
        console.error('Error:', error);
    });
    
}

console.log(localStorage);

function renderHeaderMenu()
{
    document.getElementById("site-header__inside").innerHTML='';
    
    var headerList=JSON.parse(localStorage.getItem("headerList"));
 
    for(const elem of headerList)
        {
            var headerObj = document.createElement('div');
            
            headerObj.className = elem["class_name"];
            headerObj.id =  elem["id_name"]
            headerObj.innerHTML = elem["label_hu"]

            document.getElementById("site-header__inside").appendChild(headerObj);

            //console.log(headerObj);
            //console.log(typeof categObj);
           /* 
            categObj.addEventListener('click', function()
            {
                
                document.getElementById("act_category").innerHTML = elem["category_id"];
            
                localStorage.setItem("actCat", JSON.stringify(elem));
                          
                for (const element of document.getElementsByClassName("category_menu_button")){element.classList.remove("search_button","signed")};
                
                //var id='cat_' + elem["category_id"];
                //document.getElementById(id).classList.add("search_button", "signed");
                
                this.classList.add("search_button", "signed");
            
                topics_by_category(elem["category_id"], document.getElementById("act_language").innerHTML);
            });
            */
        }
/*
    if(localStorage.getItem("actCat"))
        {
            var actCategId='cat_'+ JSON.parse(localStorage.getItem("actCat"))["category_id"];    

            document.getElementById(actCategId).classList.add("search_button", "signed");
        }
  */  
}
