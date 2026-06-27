var sections = document.querySelectorAll('.section');
sections.forEach(function(section) {
    section.style.display = 'none';
});
function section(sectionId, element) {
    // إخفاء جميع الأقسام
    var sections = document.querySelectorAll('.section');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });

    // إظهار القسم المطلوب
    document.getElementById(sectionId).style.display = 'block';

    // إزالة الكلاس "active" من جميع العناصر
    var menuItems = document.querySelectorAll('.menu2 li');
    menuItems.forEach(function(item) {
        item.classList.remove('active');
    });

    // إضافة الكلاس "active" للعنصر الذي تم الضغط عليه
    element.classList.add('active');
}
// =============================================================//
var cards = document.querySelectorAll('.specialties');
cards.forEach(function(card) {
    card.style.display = 'none';
});
function section2(cardid) {
    // إخفاء جميع الأقسام
    var cards = document.querySelectorAll('.specialties');
    cards.forEach(function(card) {
        card.style.display = 'none';
    });

    // إظهار القسم المطلوب
    document.getElementById(cardid).style.display = 'block';
}


let medCount = 1;
document.getElementById('add-medication').onclick = function() {
    medCount++;
    const ul = document.getElementById('medication-list');
    const li = document.createElement('li');
    li.innerHTML = `<label>Medication ${medCount}:</label>
        <input type="text" name="medications[]" list="medications-list" placeholder="Id of medication" autocomplete="off">`;
    ul.appendChild(li);
};
let testCount = 1;
document.getElementById('add-test').onclick = function() {
    testCount++;
    const ul = document.getElementById('test-list');
    const li = document.createElement('li');
    li.innerHTML = `<label>Test ${testCount}:</label>
        <input type="text" name="tests[]" placeholder="Name of test">`;
    ul.appendChild(li);
};