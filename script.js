const channelName ="Dreams World";

let subscribers =1000;
let channelStatus ="Active";

document.getElementById("channelName").innerText=channelName;
document.getElementById("subCount").innerText=subscribers;
document.getElementById("channelStatus").innerText=channelStatus;

console.log("Channel Name:",channelName);
console.log("Subscribers:",subscribers);
console.log("Channel Status:",channelStatus);

function showChannelInfo() {
  document.getElementById("channelCard").style.display = "block";
  console.log("Channel info opened");
}

function hideChannelInfo() {
  document.getElementById("channelCard").style.display = "none";
  console.log("Channel info closed");
}

function increaseSubscribers(){
    subscribers=subscribers+1;   
    document.getElementById("subCount").innerText=subscribers;
    console.log("Updated Subscribers:",subscribers);
}

const toggleChannelStatus = () => {
  channelStatus = channelStatus === "Active" ? "Inactive" : "Active";
  document.getElementById("channelStatus").innerText = channelStatus;
  console.log("Status toggled:", channelStatus);
};

function showWelcome() {
  document.getElementById("welcomeMsg").innerText = getWelcomeMessage();
  console.log("Welcome message shown");
}
function getWelcomeMessage() {
  return "Welcome to " + channelName + " channel!";
}

try {
    channelName="New Channel Name";
} catch (error){
    console.log("Error while reassigning const:",error.message);
}



const channel = {
  name: channelName,        
  subscribers: subscribers, 
  status: channelStatus,    
  category: "Education"
};
console.log("Channel Object:", channel);
document.getElementById("channelName").innerText = channel.name;
document.getElementById("channelStatus").innerText = channel.status;
document.getElementById("channelCategory").innerText = channel["category"];
function changeCategory() {
  channel.category =
    channel.category === "Education" ? "Entertainment" : "Education";

  document.getElementById("channelCategory").innerText = channel.category;

  console.log("Updated Channel Object:", channel);
}


channel.toggleStatus = function () {
 
  this.status = this.status === "Active" ? "Inactive" : "Active";

  document.getElementById("channelStatus").innerText = this.status;

  document.getElementById("methodResult").innerText =
    "Channel status changed to: " + this.status;

  console.log("Method executed. Updated object:", this);
};

function confirmSubscription() {
  const userChoice = confirm("Do you want to subscribe to this channel?");

  if (userChoice) {
    increaseSubscribers(); 
    document.getElementById("popupResult").innerText =
      "User confirmed subscription.";
    alert("Thank you for subscribing!"); 
  } else {
    document.getElementById("popupResult").innerText =
      "User cancelled subscription.";
  }

  console.log("Confirm result:", userChoice);
}


//login form
function togglePassword() {
  const pwd = document.getElementById("password");
  pwd.type = pwd.type === "password" ? "text" : "password";
}

function login() {
  const email = document.querySelector(
    'input[type="email"]'
  ).value.trim();

  const password = document.getElementById("password").value.trim();

 
  if (email === "" && password === "") {
    alert("Please fill in Email and Password");
    return;
  }

  if (email === "") {
    alert("Please enter your Email Address");
    return;
  }

  if (password === "") {
    alert("Please enter your Password");
    return;
  }

 
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Please enter a valid Email Address");
    return;
  }

 
  if (password.length < 6) {
    alert("Password must be at least 6 characters");
    return;
  }

 
  alert("Sign in successful 🎉");

  document.getElementById("loginOverlay").style.display = "none";
  document.body.style.overflow = "auto";
}


