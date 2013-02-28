  //validations input E-MAIL
    function checK(f) {
        if (f.contactEmail.value=='') {alert("Enter e-mail");f.contactEmail.focus();return false}
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(f.contactEmail.value)){
            return true
        }
        alert('Incorrect e-mail');f.contactEmail.select()
        return false
    }
//////**************///////