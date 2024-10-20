

 /* script */ 


 const form = document.getElementById('formjs')

   // ou document.querySelector("#FormJs")


    // Regular expressions for mail

    
    
    // Récuperer les id du form

   const username = document.getElementById('username');
   const email = document.getElementById('email');
   const passwd = document.getElementById('passwd');
   const passwdconfirm = document.getElementById('passwdconfirm');

    // Events 

    form.addEventListener('submit', e=> {
         e.preventDefault(); // prevenir la recuperation de données 
         verif_form(); // va verifier toute le formulaire 
    })

     // Les fonctions 


     function verif_form() {

         // Obtenir les valeurs inputs 

         const userValue = username.value.trim();
         const emailValue = email.value.trim(); 
         const passwdValue = passwd.value.trim(); 
         const passwdconfirmValue = passwdconfirm.value.trim(); 
     

    // Verifier le username 

    if (userValue === "") {
        let msgerr = "UserName ne peut pas etre vide.";
        setError(username,msgerr);
    } else if(!userValue.match(/^[A-za-z]/))
        {
            let msgerr = "UserName doit commencer par une lettre."
            setError(username,msgerr);
        } else {
            let letterNum = userValue.length;
            if (letterNum < 3) {
                let msgerr = "UserName doit avoir au moins 3 caractères."
                setError(username,msgerr);
            } else {
                setSuccess(username); // voir fonction success()
            }
        }

      // Verifier le mail 

       if (emailValue === "")
         {
            let msgerr = "L'E-mail ne peut pas etre vide.";
            setError(email, msgerr)
         } else if (!verif_mail(emailValue))
             {
                let msgerr = "Caractère(s) invalide(s) ou adresse mail invalide.";
                setError(email, msgerr);
             }
              else {
                validemail(email);
              }

              /* Verifier le mot de passe */ 

        if (passwdValue === "")
             {
                let msgerr = "Mot de passe ne peut pas etre vide.";
                setError(passwd, msgerr)
             } else if (!verif_pwd(passwdValue))
                 {
                    let msgerr = "Mot de passe court ou invalide."
                    setError(passwd, msgerr)
                 } else 
                  {
                     //  mot de passe valide!
                        setSuccess(passwd)

                  }

                // confirm password :

                 if (passwdconfirmValue === "")
                   {
                      let msgerr = "Champ vide!"; setError(passwdconfirm, msgerr)
                   } else if(passwdconfirmValue !== passwdValue) { let msgerr = "Le mot de passe ne correspond pas.";
                     setError(passwdconfirm,msgerr)
                   }  else { setSuccess(passwdconfirm);}


   // function setError

   function setError(elem,msgerr)
    {
        const formControl = elem.parentElement;
        const small = formControl.querySelector('small') // selectionner le dernier element du parent 'formcontrol dans HTML'

         // Ajouter le mesage d'erreur :
         
         small.innerText = msgerr

         // ajouter la classe   

         formControl.className = "form-control error";
    }

    function setSuccess(elem)
     {
        const formcontrol = elem.parentElement;
        formcontrol.className = "form-control success"; // element du HTML
     }

     // fonction pour valider l'email 
   function verif_mail(emailValue) {
     var re = /^[a-zA-Z0-9.]+@[a-zA-Z0-9.]+\.[a-zA-Z]{2,}$/;
     return re.test(emailValue) 
   }

   // email valide !

   function validemail(elem)
    {
         const formcontrol = elem.parentElement;
         formcontrol.className = "form-control success";
    }
 
    function verif_pwd(passwdValue)
     {
        var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            return re.test(passwdValue)
     }

}
