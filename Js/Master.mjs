document.addEventListener("DOMContentLoaded", Initialize, false);
var active = true;
var lastSwitch = 0;
var activeDiv = 1;
var pageLoaded = false;
var Active_Images = [
  0,
  0
];
var Image_Sources = [
  "../img/room.jpg",
  "../img/office.jpg",
];
var Image_Sources2 = [
  "../img/startup.jpg",
  "../img/startup.jpg"
];
window.onresize = function(evt) {
  if (!pageLoaded) { return; }
  var dimensions = {
      height: (evt.srcElement || evt.currentTarget).innerHeight,
      width: (evt.srcElement || evt.currentTarget).innerWidth
  };
  if(dimensions.width < 1528) {
    PageHandler.SetSmallMode(true);
    document.getElementById("Hamburger").style.display = "block";
    document.getElementById("Nav").style.display = "none";
  } else {
    PageHandler.SetSmallMode(false);
    document.getElementById("Hamburger").style.display = "none";
    document.getElementById("Nav").style.display = "block";
    PageHandler.GetMenuElement().className = "NavClass fadeInDown animated";
  }
};

var PageHandler;

function Initialize() {
  //Inistantiate the class.
  PageHandler = new NelgaraMaster(document);
  PageHandler.Initialize();
  //OnClickLightSwitch();
  window.onscroll = OnScroll;
  pageLoaded = true;
}

function changeBackground(active)
{
    var header = document.getElementById("Header");
    var title = document.getElementById("Title");
    var titleText = document.getElementById("Title_Text");
    var lightSwitch = document.getElementById("LightSwitch");
    var navContainer = document.getElementById("Nav_Container");
    var hamburger = document.getElementById("Hamburger");
    var nav = document.getElementById("Nav");
    var services = document.getElementById("Services");
    var industries = document.getElementById("Industries")
    var about = document.getElementById("About");
    var people = document.getElementById("People");
    if(active)
    {
      //Is currently white. Please switch.
      header.className = "HeaderDark";
      title.className = "TitleDark";
      titleText.className = "Title_TextDark"
      lightSwitch.className = "LightSwitcDark";
      navContainer.className = "Nav_ContainerDark";
      hamburger.className = "HamburgerDark";
      nav.className = "NavDark";
      services.className = "ServicesDark";
      industries.className = "IndustriesDark";
      about.className = "AboutDark";
      people.className = "PeopleDark";
      active = false;

    } else {
      //Is currently black. Please switch.
      header.className = "";
      title.className = "";
      titleText.className = ""
      lightSwitch.className = "";
      navContainer.className = "";
      hamburger.className = "";
      nav.className = "";
      services.className = "";
      industries.className = "";
      about.className = "";
      people.className = "";
      active = true;
    }
}

function OnClickLightSwitch()
{
  if(active)
  {
    document.body.style.background = "linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(186,186,186,1) 50%, rgba(163,163,163,1) 100%)";
    document.body.style.color = "white";
    document.getElementById("Footer").style.background = "linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(186,186,186,1) 50%, rgba(163,163,163,1) 100%)";
    changeBackground(active);
    active = false;
  }else{
    document.body.style.background = "linear-gradient(180deg, rgba(70,70,70,1) 0%, rgba(45,45,45,1) 50%, rgba(0,0,0,1) 100%)";
    document.body.style.color = "black";
    document.getElementById("Footer").style.background = "linear-gradient(180deg, rgba(70,70,70,1) 0%, rgba(45,45,45,1) 50%, rgba(0,0,0,1) 100%)";
    changeBackground(active);
    active = true;
  }
}

function HideMenu(menu) {
  if(PageHandler.GetDarkMode() == false) {
    PageHandler.GetMenuElement().className = "NavClass animated fadeOutUp";
    setTimeout(()=>{
      menu.style.display = "none";
    },500);
  } else {
    PageHandler.GetDarkMenuElement().className = "NavClass animated fadeOutUp";
    setTimeout(()=>{
      PageHandler.GetDarkMenuElement().style.display = "none";
    },500);
  }
}

function DisplayMenu(menu)
{
  if(PageHandler.GetDarkMode() == false) {
    menu.style.display = "block";
    menu.style.zIndex = 1000;
    PageHandler.GetMenuElement().style.display = "block";
    PageHandler.GetMenuElement().className = "NavClass animated fadeInDown";
  } else {
    PageHandler.GetDarkMenuElement().style.display = "block";
    PageHandler.GetDarkMenuElement().className = "NavClass animated fadeInDown";
  }
}

function IsMenuOpen(menu)
{
  if(PageHandler.GetDarkMode() == false) {
    return (menu.style.display == "block") ? true : false;
  } else {
    return (PageHandler.GetDarkMenuElement().style.display == "block") ? true : false;
  }
}

function CheckMenuState() {
  var MenuElem = PageHandler.GetMenuElement();

  //console.log("Values: " + IsMenuOpen(MenuElem) + ", and, " + PageHandler.GetDisplay() + ", and " + PageHandler.GetSmallMode())
  if(!IsMenuOpen(MenuElem) && PageHandler.GetDisplay() && PageHandler.GetSmallMode() && PageHandler.GetGate()) {
    DisplayMenu(MenuElem);
    PageHandler.SetGate(false)
  }
  if(IsMenuOpen(MenuElem) && !PageHandler.GetDisplay() && PageHandler.GetSmallMode() && PageHandler.GetGate()) {
    HideMenu(MenuElem);
    PageHandler.SetGate(false);
  }
}

function OnClickHM()
{
  PageHandler.SetDisplay(!PageHandler.GetDisplay());
  PageHandler.SetGate(true);
}


class NelgaraMaster {
  //Master Javascript class.
  constructor(document) {
    this.Display = false;
    this.ctx = document;
    if(window.innerWidth < 1528) {
      this.SmallMode = true;
      document.getElementById("Nav").style.display = "none !important";
    } else {
      this.SmallMode =  false;
    }
    this.DarkMode = false;
    this.Gate = true;
  }

  SetGate(value) {
    this.Gate = value
  }

  GetGate() {
    return this.Gate;
  }

  GetDarkMenuElement() {
    return document.getElementById("NavDark");
  }

  GetDarkMode() {
    return this.DarkMode;
  }

  SetDarkMode(value) {
    this.DarkMode = value;
  }

  GetSmallMode() {
    return this.SmallMode;
  }

  SetSmallMode(value) {
    this.SmallMode = value;
  }

  SetDisplay(value) {
    this.Display = value;
  }
  GetDisplay() {
    return this.Display;
  }

  GetMenuElement() {
    return this.ctx.getElementById("Nav");
  }



  OnServicesClick(page) {
    document.location.href = page;
  }



  Initialize() {
    this.MenuIcon = document.getElementById("Hamburger");
    this.MenuIcon.addEventListener("click", OnClickHM, false);


    this.LightSwitch = document.getElementById("LightSwitch");
    this.LightSwitch.addEventListener("click", OnClickLightSwitch, false);
  }


}

function OnScroll(e) {
  var elem = document.getElementById("Footer");
  var val = (document.documentElement.scrollTop  + $(window).height());
  if(val >= $(document).height()) {
    if(elem.style.display == "none" || elem.style.display == "") {

    }
  } else {
    if(elem.style.display == "block") {
      }, 1000);
    }
  }
}

function OnServicesClick(e) {

}
