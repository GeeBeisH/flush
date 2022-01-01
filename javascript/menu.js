var getActiveId = "menu-invoices";

function removeActive(id) {
  let element = document.getElementById(id);
  element.classList.remove("active");
}

function addActive(id) {
  let element = document.getElementById(id);
  element.classList.add("active");
}

function displayRoomButton(loadDisplay, viewClass, setActiveId) {
  $("#displayRoom").load(
    `displays/${loadDisplay}.php .${viewClass}`,
    function () {
      removeActive(getActiveId);
      addActive(setActiveId);
      getActiveId = setActiveId;
    }
  );
}
