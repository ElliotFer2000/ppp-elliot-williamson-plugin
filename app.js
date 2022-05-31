function addToTop(){
    const header =  document.createElement("header");
    const h1 =  document.createElement("h1");
    const p =  document.createElement("p");
    const logOut = document.createElement("p");
    const logOutLink = document.createElement("a");
    const dashboardLink = document.createElement("a");
    const dashboardP = document.createElement("p");

    logOutLink.textContent = "Cerrar Sesión";
    logOutLink.setAttribute("class","logout")
    logOut.appendChild(logOutLink);
    dashboardLink.setAttribute("href","/");

    logOutLink.setAttribute("href","/logout");
    h1.textContent = "Bolsa de trabajo UCA";
    p.textContent = "Bienvenido";
    dashboardLink.textContent = "Ir a inicio";
    dashboardP.appendChild(dashboardLink);

    h1.setAttribute("style","color: white;")
    p.setAttribute("style","font-size: 20px");
    logOutLink.setAttribute("style","color: white; text-decoration: underline");
    dashboardLink.setAttribute("style","color: white; text-decoration: underline");
   
    header.appendChild(h1);
    header.appendChild(p);
    header.appendChild(logOut);
    header.appendChild(dashboardP);
  
    document.body.insertAdjacentElement('afterbegin',header);
}

document.addEventListener("DOMContentLoaded", addToTop);