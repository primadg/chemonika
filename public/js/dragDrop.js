function handleDragStart(e) {

  dragSrcEl = this;

  e.dataTransfer.effectAllowed = "move";
  //e.dataTransfer.setData("text/html", this.innerHTML);
}

function handleDragEnd(e) {
  this.style.opacity = "1";
}

function handleDragEnd(e) {
  this.style.opacity = "1";

  items.forEach(function (item) {
    item.classList.remove("over");
  });
  dragSrcEl = undefined;
}

function handleDragOver(e) {
  if (e.preventDefault) {
    e.preventDefault();
  }

  return false;
}

function handleDragEnter(e) {
  this.classList.add("over");
}

function handleDragLeave(e) {
  this.classList.remove("over");
}

function handleDrop(e) {
  e.stopPropagation();
  e.preventDefault();
  if (dragSrcEl !== this) {
    if (dropAction === "swap") {
      swapItems(dragSrcEl, this);
    } else {
      shiftItems(dragSrcEl, this);
    }
    dragSrcEl = undefined;
  }
  return false;
}

function swapItems(a, b) {
  const tmp = a.innerHTML;
  a.innerHTML = b.innerHTML;
  b.innerHTML = tmp;
}

function shiftItems(srcElem, destElem) {
  const items = Array.from(document.querySelectorAll(".containerDrag .item"));
  const srcIdx = items.indexOf(srcElem);
  const destIdx = items.indexOf(destElem);
  console.log(`srcIdx = ${srcIdx}, destIdx= ${destIdx}`);
  if (srcIdx < destIdx) {
    // moving down
    for (let i = srcIdx; i < destIdx - 1; i++) {
      console.log(`swapping ${i} and ${i + 1}`);
      swapItems(items[i], items[i + 1]);
    }
  } else {
    // moving up
    for (let i = srcIdx - 1; i >= destIdx; i--) {
      console.log(`swapping ${i} and ${i + 1}`);
      swapItems(items[i], items[i + 1]);
    }
  }
}

let dragSrcEl;
let dropAction = "shift";
const items = document.querySelectorAll(".containerDrag .item");
items.forEach(function (item) {
  item.addEventListener("dragstart", handleDragStart);
  item.addEventListener("dragover", handleDragOver);
  item.addEventListener("dragenter", handleDragEnter);
  item.addEventListener("dragleave", handleDragLeave);
  item.addEventListener("dragend", handleDragEnd);
  item.addEventListener("drop", handleDrop);
});




let containerDrag = document.querySelector('.containerDrag');

containerDrag.onclick = (e) => {
    if(e.target.classList.contains('partnersAdmin__wrapper_block-close')){
        e.target.closest('.partnersAdmin__wrapper_block').remove();
    }
}

let addPartnerBtn = document.querySelector('.addPartnerBtn');

addPartnerBtn.onclick = (e) => {
    let defaultClonn = e.target.closest('.groupsAdmin').querySelector('.partnersAdmin__wrapper_block-defaultClone');
    let clonnedBlock = defaultClonn.cloneNode(true);
    let partnersArrea = e.target.closest('.groupsAdmin').querySelector('.partnersAdmin__wrapper');
    clonnedBlock.classList.remove('partnersAdmin__wrapper_block-defaultClone');
    clonnedBlock.classList.add('item');
    partnersArrea.appendChild(clonnedBlock);
    const items = document.querySelectorAll(".containerDrag .item");
    items.forEach(function (item) {
      item.addEventListener("dragstart", handleDragStart);
      item.addEventListener("dragover", handleDragOver);
      item.addEventListener("dragenter", handleDragEnter);
      item.addEventListener("dragleave", handleDragLeave);
      item.addEventListener("dragend", handleDragEnd);
      item.addEventListener("drop", handleDrop);
    });
}