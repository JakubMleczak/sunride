const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme == 'dark') {
        toggleSwitch.checked = true;
        document.getElementById("navlogo").src = "demo/img/logodark.png";
        
    }
}


    
    


function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
        document.getElementById("navlogo").src = "demo/img/logodark.png";
    }
    else {        document.documentElement.setAttribute('data-theme', 'light');
          localStorage.setItem('theme', 'light');
          document.getElementById("navlogo").src = "demo/img/logosmall.png";
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);