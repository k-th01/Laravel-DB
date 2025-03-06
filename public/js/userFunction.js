const optionMenu = document.querySelector(".select-menu"),
       selectBtn = optionMenu.querySelector(".select-btn"),
       options = optionMenu.querySelectorAll(".option"),
       sBtn_age = optionMenu.querySelector(".sBtn-age");
selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));       
options.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-age").innerText;
        sBtn_age.innerText = selectedOption;
        optionMenu.classList.remove("active");
    });
});

checkbox.addEventListener('change', function() {
    // Remove required from all checkboxes once any is checked
    document.querySelectorAll('input[name="skills"]').forEach(cb => cb.required = false);
  });