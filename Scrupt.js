alert("welcome to The Youth Hub Buy Anything, Anywhere, Anyhow, and Anytime")

function toggleNav() {
    var sidebar = document.getElementById("mySidebar");
    var hamburger = document.getElementById("hamburger");
    
    sidebar.style.width = sidebar.style.width === "250px" ? "0" : "250px";
    hamburger.style.display = "none"; // Hide the hamburger icon
  }
  
  function closeNav() {
    var sidebar = document.getElementById("mySidebar");
    var hamburger = document.getElementById("hamburger");
    
    sidebar.style.width = "0";
    hamburger.style.display = "block"; // Display the hamburger icon
  }

  