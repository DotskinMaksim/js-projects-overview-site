const juustuhind = 1.0;
const pontsikhind = 1.5;
const kaanelihind = 1.2;

function calculate(val, saiatyyp)
{
    return (val*saiatyyp).toFixed(2);
}


function validateForm() {
    let x = document.forms["kalk"]["kogus"].value;
    if (x === "") {
        alert("Palun sisesta kogus! ");
        return false;
    }
}
function inputTextValue()
{
    tyhistaSelectOption();
    tyhistaRadio();
    tyhistaCheckBox();
    validateForm();
    let answer = document.getElementById("vastus");
    let kogus = document.getElementById("kogus");

    let inputValue = kogus.value;
    let saiatyyp = document.getElementById("saiatyyp").value;

    if (saiatyyp === "juustu")
    {
        answer.innerHTML = calculate(inputValue, juustuhind) + " euro";
    }
    else if (saiatyyp === "pontsik")
    {
        answer.innerHTML = calculate(inputValue, pontsikhind) + " euro";
    }
    else if (saiatyyp === "kaaneli")
    {
        answer.innerHTML = calculate(inputValue, kaanelihind) + " euro";
    }
    else
    {
        answer.innerHTML = "Palun vali vaid need saiad mis pakkutakse";
    }
}

function tyhistaTextValue()
{
    document.getElementById("saiatyyp").value="";
}

function tyhistaSelectOption()
{
    document.getElementById("saiatyyp2").selectedIndex=0;
}
function tyhistaRadio()
{
    let elem= document.getElementsByName("saiatyyp3");

    for(let i=0; i<elem.length; i++)
    {
        elem[i].checked=false;
    }
}
function tyhistaCheckBox()
{
    let elem= document.getElementsByName("saiatyyp4");

    for(let i=0; i<elem.length; i++)
    {
        elem[i].checked=false;
    }
}

function selectOptionChange(event)
{
    tyhistaTextValue();
    tyhistaRadio();
    tyhistaCheckBox();
    validateForm();
    let answer = document.getElementById("vastus");
    let kogus = document.getElementById("kogus");

    let inputValue = kogus.value;
    let saiatyyp2 = event.target.value;

    if (saiatyyp2 === "juustu")
    {
        answer.innerHTML = calculate(inputValue, juustuhind) + " euro";
    }
    else if (saiatyyp2 === "pontsik")
    {
        answer.innerHTML = calculate(inputValue, pontsikhind) + " euro";
    }
    else if (saiatyyp2 === "kaaneli")
    {
        answer.innerHTML = calculate(inputValue, kaanelihind) + " euro";
    }
    else
    {
        answer.innerHTML = "Palun vali vaid need saiad mis pakkutakse";
    }
}

function radioChange(event) {
    tyhistaTextValue();
    tyhistaSelectOption();
    tyhistaCheckBox();
    validateForm();
    let answer = document.getElementById("vastus");
    let kogus = document.getElementById("kogus");

    let inputValue = kogus.value;
    let saiatyyp3 = event.target.value;

    if (saiatyyp3 === "juustu") {
        answer.innerHTML = calculate(inputValue, juustuhind) + " euro";
    } else if (saiatyyp3 === "pontsik") {
        answer.innerHTML = calculate(inputValue, pontsikhind) + " euro";
    } else if (saiatyyp3 === "kaaneli") {
        answer.innerHTML = calculate(inputValue, kaanelihind) + " euro";
    } else {
        answer.innerHTML = "Palun vali vaid need saiad mis pakkutakse";
    }
}

function checkboxChange(event) {
    tyhistaTextValue();
    tyhistaSelectOption();
    tyhistaRadio();
    validateForm();
    let answer = document.getElementById("vastus");
    let kogus = document.getElementById("kogus").value;

    let juustuCheckbox = document.getElementById("juustu1");
    let pontsikCheckbox = document.getElementById("pontsik1");
    let kaaneliCheckbox = document.getElementById("kaaneli1");

    let totalPrice = 0;

    if (juustuCheckbox.checked) {
        totalPrice += juustuhind;
    }
    if (pontsikCheckbox.checked) {
        totalPrice += pontsikhind;
    }
    if (kaaneliCheckbox.checked) {
        totalPrice += kaanelihind;
    }

    answer.innerHTML = calculate(kogus, totalPrice) + " euro";
}

function hind()
{
    let answer = document.getElementById("vastus");
    let kogus = document.getElementById("kogus");

    answer.innerHTML ="Hind on "+ (kogus.value * saiahind).toFixed(2)+ " euro";

}
