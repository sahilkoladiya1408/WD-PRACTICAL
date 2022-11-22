let name = document.getElementById("name");
let email = document.getElementById("email");
let mno = document.getElementById("mno");
let favc = document.getElementById("favc");
let gen = document.getElementsByName("gen");

function gender() {
  for (let ele of gen) {
    if (ele.checked) {
      return ele.value;
    }
  }
}

let display = document.getElementById("display-part");

function displayData(e) {
  display.innerHTML = `
<table>
        <tr>
            <th>Name</th>
            <td>${name.value}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>${email.value}</td>
        </tr>
        <tr>
            <th>Mobiile No</th>
            <td>${mno.value}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>${gender()}</td>
        </tr>
        <tr>
            <th>Favourite Color</th>
            <td>${favc.value}</td>
        </tr>
    </table>
`;
}

function checkForm() {
  if (!/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/.test(name.value)) {
    alert("Please Enter Valid Name");
    return;
  }
  if (
    !/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
      email.value
    )
  ) {
    alert("Please Enter Valid Email");
    return;
  }
  if (!/^[6-9][0-9]{9}$/.test(mno.value)) {
    alert("Please Enter Valid Mobile Number");
    return;
  }

  displayData();
}