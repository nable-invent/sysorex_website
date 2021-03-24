const contactForm = document.getElementById("contactForm")
if (contactForm) {
    contactForm.addEventListener("submit", (e) => onSubmit(e));
}

const regForm = document.getElementById("registrationForm")

regForm.addEventListener("submit", (e) => registerEvent(e));

function onSubmit(e) {
    e.preventDefault();
    // console.log(e);
    // return;
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const phone = document.getElementById("phone");
    const subject = document.getElementById("subject");
    const message = document.getElementById("message");
    var data = new FormData();
    data.append("name", name.value);
    data.append("email", email.value);
    data.append("phone", phone.value);
    data.append("subject", subject.value);
    data.append("message", message.value);
    const formData = {
        method: "post",
        header: { 'Content-Type': 'application/json' },
        body: data
    }
    fetch("http://localhost/sysorex/contactus/addmessage", formData)
        .then(response => {
            // console.log("response: ", response)
            return response.json()
        })
        .then(data => {
            if (data.response == true) {
                document.getElementById("messages").innerHTML = "<div class='alert alert-success'> Message Sent Successfully </div>";
            } else {
                document.getElementById("messages").innerHTML = "<div class='alert alert-danger'> Something went wrong</div>";
            }
        })
        .catch(error => console.log(error));
}
function registerEvent(e) {
    e.preventDefault()
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const eventid = urlParams.get('id');

    const name = document.getElementById("name");
    const dob = document.getElementById("dob");
    const email = document.getElementById("email");
    const phone = document.getElementById("phone");
    const address = document.getElementById("address");
    const pincode = document.getElementById("pincode");
    const country = document.getElementById("country");
    const expyear = document.getElementById("expyear");
    const organization = document.getElementById("organization");
    const skills = document.getElementById("skills");
    const experiencedetail = document.getElementById("experiencedetail");
    const goals = document.getElementById("goals");
    const intrest = document.getElementById("intrest");
    const trainingdetail = document.getElementById("trainingdetail");
    console.log(eventid);

    var data = new FormData();
    data.append("name", name.value);
    data.append("dob", dob.value);
    data.append("email", email.value);
    data.append("phone", phone.value);
    data.append("address", address.value);
    data.append("pincode", pincode.value);
    data.append("country", country.value);
    data.append("yearofexperience", expyear.value);
    data.append("organization", organization.value);
    data.append("skills", skills.value);
    data.append("experiencedetail", experiencedetail.value);
    data.append("goals", goals.value);
    data.append("intrest", intrest.value);
    data.append("trainingdetail", trainingdetail.value);
    data.append("eventid", eventid);
    const formData = {
        method: "post",
        header: { 'Content-Type': 'multipart/form-data' },
        body: data
    }
    fetch("http://localhost/sysorex/event/registerevent", formData)
        .then(response => {
            // console.log("response: ", response)
            return response.json()
        })
        .then(data => {
            if (data.response.response == true) {
                alert("Event Register Successfully");
            } else {
                alert("<div class='alert alert-danger'>" + data.response.msg + "<div>");
            }
        })
        .catch(error => console.log(error));
}