
const nav_icon = document.querySelector(".nav-profile-icon")
nav_icon.addEventListener('mouseover', () => {
    
    let title = nav_icon.shadowRoot.querySelector("div > svg > title")
    title.textContent = ''
    
    // console.log(title.isConnected);
    // console.log(title.tagName);
    // console.log(title.textContent);

});