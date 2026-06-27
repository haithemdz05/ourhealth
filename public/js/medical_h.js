var sections = document.querySelectorAll('.section');
sections.forEach(function(section) {
    section.style.display = 'none';
});
function section(sectionId, element) {
    var sections = document.querySelectorAll('.section');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });
    document.getElementById(sectionId).style.display = 'block';

   
    var menuItems = document.querySelectorAll('.menu2 li');
    menuItems.forEach(function(item) {
        item.classList.remove('active');
    });

   
    element.classList.add('active');
}
// =============================================================//
var cards = document.querySelectorAll('.specialties');
cards.forEach(function(card) {
    card.style.display = 'none';
});
function section2(cardid) {

    var cards = document.querySelectorAll('.specialties');
    cards.forEach(function(card) {
        card.style.display = 'none';
    });

    document.getElementById(cardid).style.display = 'block';
}
