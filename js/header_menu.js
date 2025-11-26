document.addEventListener("DOMContentLoaded", () => {
    
    loadHeaderMenu();
});

//localStorage.clear()

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
        console.log("headerList stored:", answer);
        renderHeaderMenu();
    })
    .catch(error => {
        console.error('Error:', error);
    });
    
}

//console.log(localStorage);

function renderHeaderMenu()
{
    document.getElementById("site-header__inside").innerHTML='';
    
    var headerList=JSON.parse(localStorage.getItem("headerList"));
 
    for(const elem of headerList)
        {
            var headerObj = document.createElement('div');
            
            headerObj.className = elem["class_name"];
            headerObj.id =  elem["id_name"];
            headerObj.innerHTML = elem["content_hu"];
            
            document.getElementById("site-header__inside").appendChild(headerObj);
            //document.getElementById(headerObj.id).innerHTML=headerObj.content;

            headerButtons(headerObj, elem["content_hu"]);

        }
}

function headerButtons(obj, content)
{
    if(obj.id=="site-header__logo")
        {
            obj.innerHTML = "<img src='images/"+content+"' alt='logo'>";
            obj.onclick = function() { location.href = 'index.php'; };
        }
    // 2. Kapcsolat gomb: E-mail küldése (mailto)
    else if (obj.id=="contact-button")
    {
        obj.onclick = function() { 
            // Ez a funkció megnyitja az alapértelmezett levelezőprogramot a megadott címmel
            location.href = 'mailto:mbotond007@gmail.com'; 
        };
    }
    
    // 3. Kilépés gomb: Session törlése
    else if (obj.id=="logout-button")
    {
        obj.onclick = function() { 
            // ÁTIRÁNYÍTÁS AZ INDEX.PHP?LOGOUT PARAMÉTERREL
            location.href = 'index.php?logout'; 
        };
    }
    
    // 4. Belépés gomb: Belépési függvény futtatása
    else if (obj.id=="login-button")
    {
        obj.onclick = function() { 
            // Feltételezve, hogy a login() függvény valahol definiálva van
            login(); 
        };
    }
    
    // 5. Regisztráció gomb: Regisztrációs függvény futtatása
    else if (obj.id=="reg-button")
    {
        obj.onclick = function() { 
            // Feltételezve, hogy a registry() függvény valahol definiálva van
            registry(); 
        };
    }
    
    // Megjegyzés: A 'search_bar' (site-header_search) elemet itt nem kezeli a kód, 
    // de az a renderHeaderMenu() függvényben beállított szöveget fogja megjeleníteni.
}

// ⚠️ Emlékeztető: A fenti kód működéséhez a következő funkciókat 
// (vagy azokhoz hasonlókat) definiálni kell a szkriptben vagy egy külső fájlban:
// function deleteSession() { ... }
// function login() { ... }
// function registry() { ... }

