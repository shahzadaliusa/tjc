'use strict';
class searchMenu {
  constructor() {

    
    this.searchTriggerEl = document.querySelector('.search-trigger');
    this.searchContainerEl = document.querySelector('.search-container');
    this.searchCloseEl = document.querySelector('.search-close');
    
    //this.array = document.querySelectorAll('.li-first');
    //this.arrayLiFirst = Array.from(this.array);

    
    this.toggleSearchBox = this.toggleSearchBox.bind(this);
    //this.resetListItems = this.resetListItem.bind(this);
    
    this.addEventListners();  //function for events handling
  }

  addEventListners(){
   
    //this.hideTriggerEl.addEventListener('click', this.toggleNavbar);
    //for (var i = 0; i < this.arrayLiFirst.length; i++) {
    //  this.arrayLiFirst[i].addEventListener('mouseenter', this.selectLiElement);
    //  this.arrayLiFirst[i].addEventListener('mouseleave', this.resetListItem);
    this.searchTriggerEl.addEventListener('click', this.toggleSearchBox);
    this.searchCloseEl.addEventListener('click', this.toggleSearchBox);
    }

    
    

  toggleSearchBox(){
    //two states of navbar trigger. 1. active 2. inactive
    //inactive state have simple class but active state have .active class in trigger elements
    if(this.searchTriggerEl.classList.contains('active')){
      this.searchTriggerEl.classList.remove('active');
      this.searchContainerEl.classList.remove('active');
      

    }
    else {
      this.searchTriggerEl.classList.add('active');
      this.searchContainerEl.classList.add('active');

    }
    
  }
}

new searchMenu();

class SideNav {
  constructor() {

    //adding class elements to this Class's Properties
    this.navTriggerEl = document.querySelector('.js-nav-trigger');
    this.navAreaEl = document.querySelector('.js-nav-area');
    this.hideTriggerEl = document.querySelector('.nav-trigger-hide');
    //--------------------------------------------------------------
    
    this.array = document.querySelectorAll('.li-first');
    this.arrayLiFirst = Array.from(this.array);

    
    //-------------------------------------------------------------
    //-----------------RESET LIST ITEMS---------------------

    this.ulFirstEl = document.querySelector('.ul-first-area');


    //--------------------------------------------------------

    this.toggleNavbar = this.toggleNavbar.bind(this);
    this.selectLiElements = this.selectLiElement.bind(this);
    this.resetListItems = this.resetListItem.bind(this);
    //New Data ---------------------------------------------------------------------------------------------------------------
    //every list level have same design for mobile
    //the second level dropdown have the different design for desktop and next level dropdown have the same design
    //since every has-child <li> tag contains first list item as a back trigger and this trigger will shown when active list
    //so when clicked on this trigger this will again remove class .active from has-child parent list tag so that our list is hidden
    //1. select all .has-child classes
    //2. iterate through click event listener and when click event occurs on fa-back trigger then remove active state of its has-child element
    this.listHasChilds = document.querySelectorAll('.has-child');
    //point no 1 is completed
    this.backTriggerEl = document.querySelectorAll('.back-menu');
    //we have selected all .back-menu triggers

    //creating arrays of both of above
    this.arrayHasChildsEl = Array.from(this.listHasChilds);
    this.arrayBackTriggerEl = Array.from(this.backTriggerEl);
    //now we have selected all elements array of back triggers and has-child classes elements
    //now we need to iterate our back trigger click event occurs on that item then it will deactivates associated li tag

    this.hideMenu = this.hideMenu.bind(this);

    //---------------------------------Ul NEXT LEVEL 
    this.subListsEl = document.querySelectorAll('.ul-next-level');
    this.arraySubListsEl = Array.from(this.subListsEl);









    //-------------------------------------------------------------------------------------------------------------------------
    this.addEventListners();  //function for events handling
  }

  addEventListners(){
    this.navTriggerEl.addEventListener('click', this.toggleNavbar);
    this.hideTriggerEl.addEventListener('click', this.toggleNavbar);
    for (var i = 0; i < this.arrayLiFirst.length; i++) {
      this.arrayLiFirst[i].addEventListener('mouseenter', this.selectLiElement);
      this.arrayLiFirst[i].addEventListener('mouseleave', this.resetListItem);
    }

    //--------------------------------submenu functionality---------------------------------

    for(var u=0; u<this.arrayBackTriggerEl.length; u++)
      this.arrayBackTriggerEl[u].addEventListener('click', this.hideMenu)
    
    for(var v=0; v<this.arraySubListsEl.length; v++){
      this.arraySubListsEl[v].addEventListener('click', this.selectLiElement);
      }
    }






    //------------------------------------------------------------------------------
    
  

  


  toggleNavbar(){
    //two states of navbar trigger. 1. active 2. inactive
    //inactive state have simple class but active state have .active class in trigger elements
    if(this.navTriggerEl.classList.contains('active')){
      this.navTriggerEl.classList.remove('active');
      this.navAreaEl.classList.remove('navbar--activated');

    }
    else {
      this.navTriggerEl.classList.add('active');
      this.navAreaEl.classList.add('navbar--activated');
    }
    
  }

  selectLiElement(){
    if(!this.classList.contains('active')){
      this.classList.add('active');   
   }
 }
    
  
resetListItem(){
    if(this.classList.contains('active')){
      this.classList.remove('active');
    }
  }

  hideMenu(){
    for(var x=0; x<this.arrayHasChildsEl.length; x++){
      if(this.arrayHasChildsEl[x].classList.contains('active'))
      {
        this.arrayHasChildsEl[x].classList.remove('active');
      }
    }
  }

}


new SideNav();

'use strict';
class NavMenu{
  constructor(){
    this.showMenuElement = document.querySelector('.menu-trigger');
    this.menuElement = document.querySelector('.menu');

    this.toggleMenu = this.toggleMenu.bind(this);
    this.addEventListeners();
  }

  addEventListeners(){
    this.showMenuElement.addEventListener('click', this.toggleMenu);
  }

  toggleMenu(){
    if(!this.showMenuElement.classList.contains('active')){
      this.showMenuElement.classList.add('active');
      this.menuElement.classList.add('active');
      
    }
    else{
      this.showMenuElement.classList.remove('active');
      this.menuElement.classList.remove('active');
      
  }
  }
}

new NavMenu();