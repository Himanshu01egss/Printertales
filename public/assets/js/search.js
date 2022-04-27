




 function sendEmail(to,cc, subject, body){ console.log("Sending Email:"); 
    console.log("Subject:\n", subject); console.log("Body:\n", body);
     Email.send({ Host : "smtp.gmail.com", Username : "zonewebsites3@gmail.com",
    Password :"fryqyrvybkfsqtkv",
    To : to,
    From : "info@printertales.com",
    Cc : cc,
    From : "info@printertales.com",
    Subject : subject, 
     Body : body, }).then( message => alert("Thanks Your Form is Submited") ); }
    const form = document.getElementById("contactmyform");
    form.addEventListener("submit", (e) => { e.preventDefault(); const data = new FormData(e.target); const subject = `Contact Us`; 
        const body = `
                <table style="width: 400px; background: #f1f1f1; font-size: 16px;">
                    <tbody>
                        <tr style="padding: 6px 10px;">
                            <th style="font-weight: 500; padding: 6px 3px; font-size: 15px;">Name:-</th>
                            <td style="font-weight: 500; padding: 6px 3px;">${data.get("name")}</td>
                        </tr>
                        <tr>
                            <th style="font-weight: 500; padding: 6px 3px; font-size: 15px;">Email:</th>
                            <td style="font-weight: 500; padding: 6px 3px;">${data.get("email")}</td>
                        </tr>
                    </tbody>
                </table>
    `; sendEmail("sheshnathegss@gmail.com","ujjawalegss@gmail.com", subject, body); });
    






























